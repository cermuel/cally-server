<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use App\Models\Booking;
use App\Models\Event;
use App\Models\User;
use Carbon\CarbonImmutable;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class PublicController extends Controller
{
    public function getProfile(Request $request): JsonResponse
    {
        $body = $request->validate([
            'username' => ['required', 'string'],
        ]);

        $username = strtolower($body['username']);


        $user = Cache::remember("public-profile-{$username}", 60 * 60, function () use ($username) {
            $user =   User::with(['events' => function ($query): void {
                $query
                    ->where('is_active', true)
                    ->where('status', 'published')
                    ->where('is_profile', true);
            }])->where('username', $username)->first();
            if (!$user) {
                return null;
            }

            return (new UserResource($user))->resolve();
        });

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        return response()->json([
            'message' => 'Profile fetched successfully',
            'user' => $user,
        ], 200);
    }

    public function getEvents(string $username): JsonResponse
    {
        $user = User::where('username', $username)->first();

        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        $events = Cache::remember("public-profile-{$user->username}-events", 60 * 60, function () use ($user) {
            return $user->events()
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
        ]);

        if (! $event->is_active || $event->status !== 'published') {
            return response()->json(['message' => 'Event not found'], 404);
        }

        $event->load(['user.availabilities']);

        $timezone = $event->user->timezone;
        $month = CarbonImmutable::createFromFormat('!Y-m', $body['month'], $timezone);
        $monthStart = $month->startOfMonth();
        $monthEnd = $month->endOfMonth();
        $durationMinutes = (int) $event->duration_minutes;
        $now = CarbonImmutable::now($timezone);

        $bookings = Booking::with('event')
            ->whereBelongsTo($event->user)
            ->where('status', '!=', 'cancelled')
            ->whereNotNull('starts_at')
            ->whereNotNull('ends_at')
            ->where('starts_at', '<=', $monthEnd->addDay()->utc())
            ->where('ends_at', '>=', $monthStart->subDay()->utc())
            ->get();

        $schedules = [];

        for ($date = $monthStart; $date->lte($monthEnd); $date = $date->addDay()) {
            $dailyBookings = $bookings->filter(function (Booking $booking) use ($date, $timezone): bool {
                return $this->bookingOverlapsDate($booking, $date, $timezone);
            });

            $schedules[$date->toDateString()] = $this->availableTimesForDate(
                date: $date,
                event: $event,
                durationMinutes: $durationMinutes,
                dailyBookings: $dailyBookings,
                now: $now,
            );
        }

        return response()->json([
            'message' => 'Schedule fetched successfully',
            'schedules' => $schedules,
            'pagination' => [
                'month' => $month->format('Y-m'),
                'previous_month' => $month->subMonth()->format('Y-m'),
                'next_month' => $month->addMonth()->format('Y-m'),
            ],
        ]);
    }

    private function availableTimesForDate(CarbonImmutable $date, Event $event, int $durationMinutes, $dailyBookings, CarbonImmutable $now): array
    {
        if ($date->endOfDay()->lte($now)) {
            return [];
        }

        if ($this->dailyLimitReached($date, $event, $dailyBookings)) {
            return [];
        }

        $weekday = strtolower($date->format('l'));
        $availabilities = $event->user->availabilities->where('day', $weekday);
        $times = [];

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

                $times[] = ['time' => $slotStart->format('H:i')];
            }
        }

        return array_values(array_unique($times, SORT_REGULAR));
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
}
