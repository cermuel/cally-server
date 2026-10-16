<?php

namespace App\Http\Controllers;

use App\AutomationTrigger;
use App\GuestStatus;
use App\Http\Requests\PublicScheduleRequest;
use App\Http\Resources\UserResource;
use App\Jobs\ConfirmGuestJob;
use App\Jobs\CreateGoogleMeetJob;
use App\Jobs\InviteGuestJob;
use App\Jobs\RescheduleMeetingInviteJob;
use App\Models\Booking;
use App\Models\Event;
use App\Models\Guest;
use App\Models\Reschedule;
use App\Models\RescheduleResponse;
use App\Models\User;
use App\RescheduleStatus;
use App\Services\AutomationService;
use App\Services\NotificationService;
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
    public function __construct(private NotificationService $notificationService, private AutomationService $automationService) {}

    private function frontendUrl(): string
    {
        return config('services.frontend_url');
    }

    public function schedule(PublicScheduleRequest $request): JsonResponse
    {
        $body = $request->validated();

        $startsAt = BookingTime::toUtc($body['starts_at'], $body['timezone']);
        $endsAt = BookingTime::toUtc($body['ends_at'], $body['timezone']);
        $lock = Cache::lock('booking-event-' . $body['event_id'] . '-starts-' . $startsAt->getTimestamp(), 10);

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
                $this->automationService->run(AutomationTrigger::BookingCreated, $booking, null);
                $booking->load('event');
                $this->notificationService->send($user, 'booking.created', "New booking for {$booking->event->name}", null, "{$this->frontendUrl()}/app/meetings?booking_id={$booking->id}", ['booking_id' => $booking->id]);
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

    public function requestReschedule(Request $request, string $bookingId)
    {
        $body = $request->validate([
            'email' => ['required', 'email'],
            'starts_at' => ['required', 'date', 'before:ends_at'],
            'ends_at' => ['required', 'date', 'after:starts_at'],
        ]);

        $booking = Booking::with('guests')->where('id', $bookingId)->first();

        if (! $booking) {
            abort(404, 'Invalid or deleted booking');
        }

        $hasPendingReschedule = $booking->reschedule()
            ->where('status', RescheduleStatus::Pending->value)
            ->exists();

        if ($hasPendingReschedule) {
            abort(409, 'This booking already has a pending reschedule request.');
        }

        $requester = $booking->guests()->where('email', $body['email'])->firstOrFail();

        $reschedule = DB::transaction(function () use ($body, $booking, $requester) {
            $reschedule = $booking->reschedule()->create([
                'starts_at' => $body['starts_at'],
                'ends_at' => $body['ends_at'],
            ]);

            foreach ($booking->guests as $guest) {
                $reschedule->responses()->create([
                    'guest_id' => $guest->id,
                    'status' => $guest->id === $requester->id
                        ? RescheduleStatus::Accepted
                        : RescheduleStatus::Pending,
                    'email' => $guest->email,
                ]);
            }



            $booking->load('user');
            $reschedule->responses()->create([
                'user_id' => $booking->user_id,
                'status' => RescheduleStatus::Pending,
                'email' => $booking->user->email
            ]);
            $user = $booking->user;
            $this->notificationService->send($user, 'booking.rescheduled', "Booking reschedule request for {$booking->event->name}", null, "{$this->frontendUrl()}/app/meetings?booking_id={$booking->id}", ['booking_id' => $booking->id]);
            $booking->unsetRelation('user');

            return $reschedule;
        }, 2);

        $this->dispatchInviteEmailBatches($reschedule, $booking, $requester['name'] ?? $body['email']);

        return response()->json([
            'message' => 'Meeting request submitted successfully',
            'reschedule' => $reschedule,

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
            usort($slots, fn(array $first, array $second): int => $first['starts_at'] <=> $second['starts_at']);
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

    public function getAvailableTimes(Request $request, Event $event): JsonResponse
    {
        $body = $request->validate([
            'booking_date' => ['required', 'date_format:Y-m-d'],
        ]);

        if (! $event->is_active || $event->status !== 'published') {
            return response()->json(['message' => 'Event not found'], 404);
        }

        $event->load(['user.availabilities']);

        $hostTimezone = $event->user->timezone;
        $bookingDate = CarbonImmutable::createFromFormat('!Y-m-d', $body['booking_date'], $hostTimezone);
        $rangeStart = $bookingDate->startOfDay()->subDay();
        $rangeEnd = $bookingDate->endOfDay()->addDay();

        $bookings = Booking::with('event')
            ->whereBelongsTo($event->user)
            ->where('status', '!=', 'cancelled')
            ->whereNotNull('starts_at')
            ->whereNotNull('ends_at')
            ->where('starts_at', '<=', $rangeEnd->utc())
            ->where('ends_at', '>=', $rangeStart->utc())
            ->get();

        $dailyBookings = $bookings->filter(function (Booking $booking) use ($bookingDate, $hostTimezone): bool {
            return $this->bookingOverlapsDate($booking, $bookingDate, $hostTimezone);
        });

        $availableTimes = collect($this->availableSlotsForDate(
            date: $bookingDate,
            event: $event,
            durationMinutes: (int) $event->duration_minutes,
            dailyBookings: $dailyBookings,
            now: CarbonImmutable::now($hostTimezone),
        ))->map(fn(array $slot): array => [
            'time' => $slot['starts_at']->format('H:i'),
            'starts_at' => $slot['starts_at']->utc()->toISOString(),
            'ends_at' => $slot['ends_at']->utc()->toISOString(),
        ])->values();

        return response()->json([
            'message' => 'Available times fetched successfully',
            'booking_date' => $bookingDate->toDateString(),
            'available_times' => $availableTimes,
            'timezone' => $hostTimezone,
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
        $invitationPath = $frontendUrl . '/public/' . $booking->id . '/request';
        $confirmationPath = $frontendUrl . '/public/' . $booking->id;

        $invitationJobs = $guests
            ->where('attendance_status', GuestStatus::Pending)
            ->map(fn(Guest $guest): InviteGuestJob => new InviteGuestJob(
                $hostName,
                $guest->email,
                $meetingTime,
                $invitationPath . '?email=' . urlencode($guest->email),
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
            ->map(fn(Guest $guest): ConfirmGuestJob => new ConfirmGuestJob(
                $hostName,
                $guest->email,
                $meetingTime,
                $confirmationPath . '?email=' . urlencode($guest->email),
                $guest->name ?? 'there',
            ));

        if ($confirmationJobs->isNotEmpty()) {
            Bus::batch($confirmationJobs)
                ->name('meeting-confirm')
                ->onQueue('meeting-confirm')
                ->dispatch();
        }
    }

    public function dispatchInviteEmailBatches(Reschedule $reschedule, Booking $booking, string $requesterName): void
    {
        $responses = $reschedule->responses()
            ->with('guest')
            ->whereNotNull('guest_id')
            ->get();

        $frontendUrl = config('services.frontend_url');
        $meetingTime = BookingTime::formatForGuest($booking, $booking->starts_at);
        $proposedTime = BookingTime::formatForGuest($booking, $reschedule->starts_at);
        $invitationPath = $frontendUrl . '/public/' . $booking->id . '/reschedule';

        $invitationJobs = $responses
            ->where('status', RescheduleStatus::Pending)
            ->map(fn(RescheduleResponse $guest): RescheduleMeetingInviteJob => new RescheduleMeetingInviteJob(
                $guest->id,
                $guest->email,
                $requesterName,
                $booking->event->name,
                $meetingTime,
                $proposedTime,
                $invitationPath . '?email=' . urlencode($guest->email) . '&reschedule_id=' . $reschedule->id,
                $guest->guest?->name ?? 'there',
            ));

        if ($invitationJobs->isNotEmpty()) {
            Bus::batch($invitationJobs)
                ->name('meeting-reschedule')
                ->onQueue('meeting-invite')
                ->dispatch();
        }
    }
}
