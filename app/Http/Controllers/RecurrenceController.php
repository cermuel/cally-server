<?php

namespace App\Http\Controllers;

use App\Http\Requests\RecurrenceRequest;
use App\Http\Resources\RecurrenceResource;
use App\Jobs\CreateRecurringBookings;
use App\Jobs\CreateRecurringGoogleMeetJob;
use App\Jobs\InviteGuestJob;
use App\Jobs\TeamBookingInviteJob;
use App\Models\Recurrence;
use App\Models\Team;
use App\Models\TeamMember;
use App\Services\GoogleCalendarService;
use App\Support\BookingTime;
use Carbon\CarbonImmutable;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\DB;

class RecurrenceController extends Controller
{
    public function index(Request $request): JsonResponse
    {
        $user = $request->user();
        $filters = $request->only(['event_id', 'team_id']);

        $recurrences = Recurrence::with(['user', 'event'])->where('user_id', $user->id)->filter($filters)->paginate();

        return response()->json([
            'message' => 'Recurrences fetched successfully',
            'recurrences' => RecurrenceResource::collection($recurrences->items()),
            'pagination' => [
                'current_page' => $recurrences->currentPage(),
                'per_page' => $recurrences->perPage(),
                'total' => $recurrences->total(),
                'last_page' => $recurrences->lastPage(),
                'from' => $recurrences->firstItem(),
                'to' => $recurrences->lastItem(),
                'previous_page_url' => $recurrences->previousPageUrl(),
                'next_page_url' => $recurrences->nextPageUrl(),
            ],
        ]);
    }

    public function show(Request $request, string $id): JsonResponse
    {
        $user = $request->user();
        $recurrence = Recurrence::where('id', $id)->where('user_id', $user->id)->first();

        if (! $recurrence) {
            abort(404, 'Recurrence not found');
        }

        $recurrence->loadMissing(['user', 'bookings', 'event']);

        return response()->json([
            'message' => 'Recurrence fetched successfully',
            'recurrence' => new RecurrenceResource($recurrence),

        ]);
    }

    public function store(RecurrenceRequest $request): JsonResponse
    {
        $body = $request->validated();
        $user = $request->user();

        $event = $request->user()
            ->events()
            ->find($body['event_id']);

        if (! $event) {
            abort(400, 'Invalid or deleted event');
        }

        $interval = (int) $body['interval'];
        $timezone = $user['timezone'];
        $duration = (int) $event->duration_minutes;

        $start = CarbonImmutable::createFromFormat(
            '!Y-m-d H:i',
            "{$body['starts_on']} {$body['start_time']}",
            $timezone,
        );

        $end = CarbonImmutable::parse(
            $body['ends_on'],
            $timezone,
        )->endOfDay();

        if ($start->isPast()) {
            abort(400, 'Start date must be in the future');
        }

        $weekdays = array_map(
            'intval',
            $body['days_of_week'] ?? [],
        );

        $firstWeek = $start->startOfWeek(CarbonImmutable::MONDAY);
        $cursor = $start;
        $occurrences = [];

        while ($cursor->lessThanOrEqualTo($end)) {
            $days = (int) $start->diffInDays($cursor);

            $weeks = intdiv(
                (int) $firstWeek->diffInDays(
                    $cursor->startOfWeek(CarbonImmutable::MONDAY),
                ),
                7,
            );

            $months = (($cursor->year - $start->year) * 12)
                + ($cursor->month - $start->month);

            $matches = match ($body['frequency']) {
                'daily' => $days % $interval === 0,

                'weekly' => $weeks % $interval === 0
                    && in_array($cursor->dayOfWeek, $weekdays, true),

                'monthly' => $months % $interval === 0
                    && $cursor->day === $start->day,
            };

            if ($matches) {
                $startsAt = $cursor->utc();

                $occurrences[] = [
                    'starts_at' => $startsAt,
                    'ends_at' => $startsAt->addMinutes($duration),
                ];
            }

            $cursor = $cursor->addDay();
        }

        if ($occurrences === []) {
            abort(400, 'No meetings fall within the selected dates.');
        }

        if (!isset($body['override'])) {
            $existingBookings = $user->bookings()
                ->where('status', '!=', 'cancelled')
                ->whereNotNull('starts_at')
                ->whereNotNull('ends_at')
                ->where('starts_at', '<', $occurrences[array_key_last($occurrences)]['ends_at'])
                ->where('ends_at', '>', $occurrences[0]['starts_at'])
                ->get(['starts_at', 'ends_at']);

            $hasConflict = collect($occurrences)->contains(function (array $occurrence) use ($existingBookings): bool {
                return $existingBookings->contains(function ($booking) use ($occurrence): bool {
                    return $booking->starts_at->lessThan($occurrence['ends_at'])
                        && $booking->ends_at->greaterThan($occurrence['starts_at']);
                });
            });

            if ($hasConflict) {
                abort(409, 'One or more meeting times are already reserved.');
            }
        }

        $recurrence = DB::transaction(function () use (
            $user,
            $body,
            $event,
            $occurrences,
        ) {
            $recurrence = Recurrence::create([
                'user_id' => $user->id,
                'event_id' => $event->id,
                'frequency' => $body['frequency'],
                'interval' => $body['interval'],
                'days_of_week' => $body['frequency'] === 'weekly'
                    ? $body['days_of_week']
                    : null,
                'starts_on' => $body['starts_on'],
                'start_time' => $body['start_time'],
                'ends_on' => $body['ends_on'],
                'timezone' => $user->timezone,
            ]);

            if (isset($body['contact_id'])) {
                $jobs = [];
                foreach ($occurrences as $occurrence) {
                    $jobs[] = new CreateRecurringBookings(
                        $user->id,
                        $occurrence,
                        $event->id,
                        $recurrence->id,
                        $user->timezone,
                        $body['contact_id'],
                        null
                    );
                }

                DB::afterCommit(function () use ($jobs, $recurrence) {
                    Bus::batch($jobs)
                        ->onQueue('recurring-meeting')
                        ->name('recurring-meeting-finite')
                        ->then(function () use ($recurrence) {
                            $booking = $recurrence->bookings()
                                ->with(['contact', 'user'])
                                ->orderBy('starts_at')
                                ->firstOrFail();

                            CreateRecurringGoogleMeetJob::dispatch($recurrence->id)->onQueue('recurring-meeting');

                            if ($booking->contact) {
                                $frontendUrl = config('services.frontend_url');
                                $hostName = $booking->user->name ?? 'Host';
                                $meetingTime = BookingTime::formatForGuest($booking, $booking->starts_at);
                                $invitationUrl = $frontendUrl . '/public/' . $booking->id . '/request?' . http_build_query([
                                    'recurrence_id' => $recurrence->id,
                                    'email' => $booking->contact->email,
                                ]);

                                InviteGuestJob::dispatch(
                                    $hostName,
                                    $booking->contact->email,
                                    $meetingTime,
                                    $invitationUrl,
                                    $booking->contact->name ?? 'there',
                                    $recurrence->scheduleDescription(),
                                )->onQueue('meeting-invite');
                            }
                        })
                        ->dispatch();
                });
            } else if (isset($body['team_id'])) {
                $team = Team::with('members')->where('id', $body['team_id'])->first();
                if (!$team) return;
                $event->update(['team_id' => $team->id]);
                $jobs = [];
                foreach ($occurrences as $occurrence) {
                    $jobs[] = new CreateRecurringBookings(
                        $user->id,
                        $occurrence,
                        $event->id,
                        $recurrence->id,
                        $user->timezone,
                        null,
                        $body['team_id']
                    );
                }

                DB::afterCommit(function () use ($jobs, $recurrence, $team) {
                    Bus::batch($jobs)
                        ->onQueue('recurring-meeting')
                        ->name('recurring-meeting-finite')
                        ->then(function () use ($recurrence, $team) {
                            $booking = $recurrence->bookings()
                                ->orderBy('starts_at')
                                ->firstOrFail();

                            CreateRecurringGoogleMeetJob::dispatch($recurrence->id)->onQueue('recurring-meeting');

                            $team->loadMissing(['members']);
                            $frontendUrl = config('services.frontend_url');
                            $invitationJobs = $team->members
                                ->map(fn(TeamMember $guest): TeamBookingInviteJob => new TeamBookingInviteJob(
                                    $team->slug,
                                    $guest->user_id,
                                    $booking->id,
                                    $frontendUrl,
                                    true
                                ));
                            if ($invitationJobs->isNotEmpty()) {
                                Bus::batch($invitationJobs)
                                    ->name('meeting-invite')
                                    ->onQueue('meeting-invite')
                                    ->dispatch();
                            }
                        })
                        ->dispatch();
                });
            }



            return $recurrence;
        });

        return response()->json([
            'message' => 'Recurring meetings created successfully.',
            'body' => $recurrence,
        ], 201);
    }

    public function destroy(Request $request, string $id): JsonResponse
    {
        $user = $request->user();
        $recurrence = Recurrence::where('id', $id)->where('user_id', $user->id)->first();

        if (! $recurrence) {
            abort(404, 'Recurrence not found');
        }

        $providerBooking = $recurrence->bookings()
            ->with('user')
            ->whereNotNull('provider_event_id')
            ->orderBy('starts_at')
            ->first();

        if ($providerBooking) {
            retry(3, function () use ($providerBooking) {
                app(GoogleCalendarService::class)->cancelBookingEvent($providerBooking);
            }, 300);
        }

        DB::transaction(function () use ($recurrence) {
            $recurrence->bookings()->get()->each->delete();
            $recurrence->delete();
        });

        return response()->json([
            'message' => 'Recurrence deleted successfully',
        ]);
    }
}
