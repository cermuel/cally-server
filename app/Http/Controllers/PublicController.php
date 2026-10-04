<?php

namespace App\Http\Controllers;

use App\AutomationTrigger;
use App\GuestStatus;
use App\Http\Requests\PublicScheduleRequest;
use App\Http\Resources\UserResource;
use App\Jobs\ConfirmGuestJob;
use App\Jobs\CreateGoogleMeetJob;
use App\Jobs\InviteGuestJob;
use App\Models\Booking;
use App\Models\Event;
use App\Models\Guest;
use App\Models\User;
use App\Services\AutomationService;
use App\Support\BookingTime;
use Carbon\CarbonImmutable;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class PublicController extends Controller
{
    public function schedule(PublicScheduleRequest $request): JsonResponse
    {
        $body = $request->validated();

        $startsAt = BookingTime::toUtc($body['starts_at'], $body['timezone']);
        $endsAt = BookingTime::toUtc($body['ends_at'], $body['timezone']);
        $lock = Cache::lock('booking-event-'.$body['event_id'].'-starts-'.$startsAt->getTimestamp(), 10);

        if (! $lock->get()) {
            return response()->json([
                'message' => 'This slot is currently reserved. Please try again.',
            ], 423);
        }

        try {
            [$booking, $guests] = DB::transaction(function () use ($body, $startsAt, $endsAt): array {
                $user = User::where('username', $body['username'])->firstOrFail();

                $bookingExists = Booking::where('user_id', $user->id)
                    ->where('status', '!=', 'cancelled')
                    ->whereNotNull('starts_at')
                    ->whereNotNull('ends_at')
                    ->where('starts_at', '<', $endsAt)
                    ->where('ends_at', '>', $startsAt)
                    ->exists();

                if ($bookingExists) {
                    abort(409, 'This time is already reserved for another meeting.');
                }

                $booking = Booking::create([
                    'user_id' => $user->id,
                    'event_id' => $body['event_id'],
                    'starts_at' => $startsAt,
                    'ends_at' => $endsAt,
                    'booking_timezone' => $body['timezone'],
                    'notes' => $body['notes'] ?? null,
                ]);

                $guests = collect($body['guests'])->map(function (array $guest) use ($booking): Guest {
                    $guest['name'] ??= 'there';
                    $guest['attendance_status'] ??= GuestStatus::Pending->value;

                    return $booking->guests()->create($guest);
                });

                $booking->load('user');
                app(AutomationService::class)->run(AutomationTrigger::BookingCreated, $booking, null);
                CreateGoogleMeetJob::dispatch($booking->id)->onQueue('meeting');
                $this->dispatchGuestEmailBatches($booking, $guests);
                $booking->unsetRelation('user');

                return [$booking, $guests];
            });
        } finally {
            $lock->release();
        }

        return response()->json([
            'message' => 'Booking scheduled successfully',
            'booking' => $booking,
            'guests' => $guests,
        ], 201);
    }

    public function getProfile(Request $request): JsonResponse
    {
        $body = $request->validate([
            'username' => ['required', 'string'],
        ]);

        $username = strtolower($body['username']);

        $user = Cache::remember("public-profile-{$username}", 60 * 60, function () use ($username) {
            $user = User::where('username', $username)->first();
            if (! $user) {
                return null;
            }

            return (new UserResource($user))->resolve();
        });

        if (! $user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        return response()->json([
            'message' => 'Profile fetched successfully',
            'user' => $user,
        ], 200);
    }

    public function getEvents(string $username): JsonResponse
    {
        $user = Cache::remember("public-profile-username-{$username}", 60 * 60, function () use ($username) {
            $user = User::where('username', $username)->first();
            if (! $user) {
                return null;
            }

            return $user;
        });

        if (! $user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        $events = Cache::remember("public-profile-{$username}-events", 60 * 60, function () use ($user) {

            return Event::where('user_id', $user['id'])
                ->where('is_active', true)
                ->where('status', 'published')
                ->where('is_profile', true)
                ->where('visibility', 'public')
                ->get()
                ->toArray();
        });

        return response()->json([
            'message' => 'Events fetched successfully',
            'events' => $events,
        ]);
    }

    public function getUserSchedule(Request $request, Event $event): JsonResponse
    {
        $body = $request->validate([
            'month' => ['required', 'date_format:Y-m'],
            'timezone' => ['required', 'timezone:all'],
        ]);

        if (! $event->is_active || $event->status !== 'published') {
            return response()->json(['message' => 'Event not found'], 404);
        }

        $event->load(['user.availabilities']);

        $hostTimezone = $event->user->timezone;
        $viewerTimezone = $body['timezone'];
        $month = CarbonImmutable::createFromFormat('!Y-m', $body['month'], $viewerTimezone);
        $monthStart = $month->startOfMonth();
        $monthEnd = $month->endOfMonth();
        $hostRangeStart = $monthStart->utc()->timezone($hostTimezone)->startOfDay()->subDay();
        $hostRangeEnd = $monthEnd->utc()->timezone($hostTimezone)->endOfDay()->addDay();
        $durationMinutes = (int) $event->duration_minutes;
        $now = CarbonImmutable::now($hostTimezone);

        $bookings = Booking::with('event')
            ->whereBelongsTo($event->user)
            ->where('status', '!=', 'cancelled')
            ->whereNotNull('starts_at')
            ->whereNotNull('ends_at')
            ->where('starts_at', '<=', $hostRangeEnd->utc())
            ->where('ends_at', '>=', $hostRangeStart->utc())
            ->get();

        $schedules = [];

        for ($date = $monthStart; $date->lte($monthEnd); $date = $date->addDay()) {
            $schedules[$date->toDateString()] = [];
        }

        for ($date = $hostRangeStart; $date->lte($hostRangeEnd); $date = $date->addDay()) {
            $dailyBookings = $bookings->filter(function (Booking $booking) use ($date, $hostTimezone): bool {
                return $this->bookingOverlapsDate($booking, $date, $hostTimezone);
            });

            $availableSlots = $this->availableSlotsForDate(
                date: $date,
                event: $event,
                durationMinutes: $durationMinutes,
                dailyBookings: $dailyBookings,
                now: $now,
            );

            foreach ($availableSlots as $slot) {
                $viewerStart = $slot['starts_at']->timezone($viewerTimezone);

                if ($viewerStart->lt($monthStart) || $viewerStart->gt($monthEnd)) {
                    continue;
                }

                $dateKey = $viewerStart->toDateString();
                $schedules[$dateKey][] = [
                    'time' => $viewerStart->format('H:i'),
                    'starts_at' => $slot['starts_at']->utc()->toISOString(),
                    'ends_at' => $slot['ends_at']->utc()->toISOString(),
                ];
            }
        }

        foreach ($schedules as &$slots) {
            usort($slots, fn (array $first, array $second): int => $first['starts_at'] <=> $second['starts_at']);
        }
        unset($slots);

        return response()->json([
            'message' => 'Schedule fetched successfully',
            'schedules' => $schedules,
            'timezone' => $viewerTimezone,
            'host_timezone' => $hostTimezone,
            'pagination' => [
                'month' => $month->format('Y-m'),
                'previous_month' => $month->subMonth()->format('Y-m'),
                'next_month' => $month->addMonth()->format('Y-m'),
            ],
        ]);
    }

    /**
     * @return array<int, array{starts_at: CarbonImmutable, ends_at: CarbonImmutable}>
     */
    private function availableSlotsForDate(CarbonImmutable $date, Event $event, int $durationMinutes, $dailyBookings, CarbonImmutable $now): array
    {
        if ($date->endOfDay()->lte($now)) {
            return [];
        }

        if ($this->dailyLimitReached($date, $event, $dailyBookings)) {
            return [];
        }

        $weekday = strtolower($date->format('l'));
        $availabilities = $event->user->availabilities->where('day', $weekday);
        $slots = [];

        foreach ($availabilities as $availability) {
            if (! $availability->start_time || ! $availability->end_time) {
                continue;
            }

            $availabilityStart = $date->setTimeFromTimeString($availability->start_time);
            $availabilityEnd = $date->setTimeFromTimeString($availability->end_time);

            for ($slotStart = $availabilityStart; $slotStart->addMinutes($durationMinutes)->lte($availabilityEnd); $slotStart = $slotStart->addMinutes(5)) {
                $slotEnd = $slotStart->addMinutes($durationMinutes);

                if ($slotStart->lte($now)) {
                    continue;
                }

                if ($this->slotConflictsWithBookings($slotStart, $slotEnd, $dailyBookings, $event->user->timezone)) {
                    continue;
                }

                $slots[$slotStart->utc()->toISOString()] = [
                    'starts_at' => $slotStart,
                    'ends_at' => $slotEnd,
                ];
            }
        }

        return array_values($slots);
    }

    private function dailyLimitReached(CarbonImmutable $date, Event $event, $dailyBookings): bool
    {
        if (! $event->max_meetings_daily) {
            return false;
        }

        return $dailyBookings
            ->where('event_id', $event->id)
            ->count() >= $event->max_meetings_daily;
    }

    private function slotConflictsWithBookings(CarbonImmutable $slotStart, CarbonImmutable $slotEnd, $dailyBookings, string $timezone): bool
    {
        return $dailyBookings->contains(function (Booking $booking) use ($slotStart, $slotEnd, $timezone): bool {
            $blockedStart = CarbonImmutable::instance($booking->starts_at)
                ->timezone($timezone)
                ->subMinutes((int) ($booking->event?->pre_meeting_minutes ?? 0));
            $blockedEnd = CarbonImmutable::instance($booking->ends_at)
                ->timezone($timezone)
                ->addMinutes((int) ($booking->event?->post_meeting_minutes ?? 0));

            return $slotStart->lte($blockedEnd) && $slotEnd->gte($blockedStart);
        });
    }

    private function bookingOverlapsDate(Booking $booking, CarbonImmutable $date, string $timezone): bool
    {
        $blockedStart = CarbonImmutable::instance($booking->starts_at)
            ->timezone($timezone)
            ->subMinutes((int) ($booking->event?->pre_meeting_minutes ?? 0));
        $blockedEnd = CarbonImmutable::instance($booking->ends_at)
            ->timezone($timezone)
            ->addMinutes((int) ($booking->event?->post_meeting_minutes ?? 0));

        return $blockedStart->lte($date->endOfDay()) && $blockedEnd->gte($date->startOfDay());
    }

    /**
     * @param  Collection<int, Guest>  $guests
     */
    private function dispatchGuestEmailBatches(Booking $booking, Collection $guests): void
    {
        $frontendUrl = config('services.frontend_url');
        $hostName = $booking->user->name ?? 'Host';
        $meetingTime = BookingTime::formatForGuest($booking, $booking->starts_at);
        $invitationPath = $frontendUrl.'/public/'.$booking->id.'/request';
        $confirmationPath = $frontendUrl.'/public/'.$booking->id;

        $invitationJobs = $guests
            ->where('attendance_status', GuestStatus::Pending)
            ->map(fn (Guest $guest): InviteGuestJob => new InviteGuestJob(
                $hostName,
                $guest->email,
                $meetingTime,
                $invitationPath.'?email='.urlencode($guest->email),
                $guest->name ?? 'there',
            ));

        if ($invitationJobs->isNotEmpty()) {
            Bus::batch($invitationJobs)
                ->name('meeting-invite')
                ->onQueue('meeting-invite')
                ->dispatch();
        }

        $confirmationJobs = $guests
            ->where('attendance_status', GuestStatus::Confirmed)
            ->map(fn (Guest $guest): ConfirmGuestJob => new ConfirmGuestJob(
                $hostName,
                $guest->email,
                $meetingTime,
                $confirmationPath.'?email='.urlencode($guest->email),
                $guest->name ?? 'there',
            ));

        if ($confirmationJobs->isNotEmpty()) {
            Bus::batch($confirmationJobs)
                ->name('meeting-confirm')
                ->onQueue('meeting-confirm')
                ->dispatch();
        }
    }
}
