<?php

namespace App\Http\Controllers;

use App\AutomationTrigger;
use App\BookingStatus;
use App\EventVisibility;
use App\GuestStatus;
use App\Http\Requests\TeamBookingRequest;
use App\Http\Resources\BookingDetailsResource;
use App\Jobs\CreateGoogleMeetJob;
use App\Jobs\TeamBookingInviteJob;
use App\Models\Booking;
use App\Models\Team;
use App\Models\TeamMember;
use App\Models\User;
use App\Services\AutomationService;
use App\Services\GoogleCalendarService;
use App\Services\NotificationService;
use App\Support\BookingTime;
use App\TeamRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\DB;

class TeamBookingController extends Controller
{
    public function __construct(public NotificationService $notificationService, private AutomationService $automationService) {}

    public function index(Request $request, string $teamId)
    {
        $team = Team::find($teamId);
        abort_unless($team, 404, 'Team not found.');
        $this->authorizeTeamAccess($request->user(), $team);

        $filters = $request->only(['status', 'provider_id', 'date', 'event_id']);

        $bookings = Booking::with(['guests', 'event', 'guests.user'])->whereHas('event', function ($query) use ($teamId) {
            $query->where('team_id', $teamId);
        })->filter($filters)->latest()->paginate();

        return response()->json([
            'message' => 'Bookings fetched successfully',
            'bookings' => BookingDetailsResource::collection($bookings),
            'pagination' => [
                'current_page' => $bookings->currentPage(),
                'per_page' => $bookings->perPage(),
                'total' => $bookings->total(),
                'last_page' => $bookings->lastPage(),
                'from' => $bookings->firstItem(),
                'to' => $bookings->lastItem(),
                'previous_page_url' => $bookings->previousPageUrl(),
                'next_page_url' => $bookings->nextPageUrl(),
            ],
        ]);
    }

    public function store(TeamBookingRequest $request, string $teamId)
    {
        $body = $request->validated();
        $user = $request->user();
        $team = Team::where('id', $teamId)->first();

        if (! $team) {
            abort(404, 'Team not found');
        }
        $this->authorizeBookingManagement($user, $team);

        [$booking, $event] = DB::transaction(function () use ($teamId, $user, $body, $team) {
            $newBooking = BookingTime::normalizePayload($body['booking'], $user->timezone);
            $newBooking['user_id'] = $user->id;
            $newEvent = $body['event'];
            $newEvent['is_profile'] = false;
            $newEvent['status'] = 'published';
            $newEvent['visibility'] = EventVisibility::Private->value;
            $newEvent['is_active'] = true;
            $newEvent['team_id'] = $teamId;
            $newEvent['schedule_type'] = 'collective';
            $newBooking['status'] = BookingStatus::Pending;

            $team->loadMissing('members.user');
            $now = now();

            $event = $user->events()->create($newEvent);
            $booking = $event->bookings()->create($newBooking);

            $guests = $team->members->map(fn($member) => [
                'booking_id' => $booking->id,
                'user_id' => $member->user_id,
                'email' => $member->user->email,
                'name' => $member->user->name,
                'attendance_status' => $member->user_id === $user->id ? GuestStatus::Confirmed->value : GuestStatus::Pending->value,
                'created_at' => $now,
                'updated_at' => $now,
            ])->all();

            if ($guests !== []) {
                $booking->guests()->insert($guests);
            }

            return [$booking, $event];
        }, 2);

        DB::afterCommit(function () use ($booking, $team) {
            $this->automationService->run(AutomationTrigger::BookingCreated, $booking, null);
            CreateGoogleMeetJob::dispatch($booking->id)->onQueue('meeting');
            $team->loadMissing(['members']);
            $frontendUrl = config('services.frontend_url');
            $invitationJobs = $team->members
                ->map(fn(TeamMember $guest): TeamBookingInviteJob => new TeamBookingInviteJob(
                    $team->slug,
                    $guest->user_id,
                    $booking->id,
                    $frontendUrl,
                    false
                ));
            if ($invitationJobs->isNotEmpty()) {
                Bus::batch($invitationJobs)
                    ->name('meeting-invite')
                    ->onQueue('meeting-invite')
                    ->dispatch();
            }
        });

        return response()->json([
            'message' => 'Meeting created successfully',
            'event' => $event,
            'booking' => $booking,
        ], 201);
    }

    public function show(Request $request, string $teamId, string $bookingId)
    {
        $user = $request->user();
        $team = Team::where('id', $teamId)->first();
        if (! $team) {
            abort(404, 'Team not found');
        }
        $this->authorizeTeamAccess($user, $team);

        $booking = $team->bookings()->with(['event', 'guests', 'guests.user'])->where('bookings.id', $bookingId)->first();
        if (! $booking) {
            abort(404, 'Booking not found');
        }

        return response()->json([
            'message' => 'Booking fetched successfully',
            'booking' => new BookingDetailsResource($booking),
        ]);
    }

    public function update(TeamBookingRequest $request, string $teamId, string $bookingId)
    {
        $body = $request->validated();
        $user = $request->user();
        $team = Team::where('id', $teamId)->first();

        if (! $team) {
            abort(404, 'Team not found');
        }
        $this->authorizeBookingManagement($user, $team);

        [$booking, $event, $oldStatus] = DB::transaction(function () use ($team, $bookingId, $body) {
            $booking = $team->bookings()->find($bookingId);
            abort_if(! $booking, 404, 'Booking not found');
            $oldStatus = $booking->status;

            $event = $team->events()->find($booking->event_id);
            abort_if(! $event, 404, 'Event not found');

            if (! empty($body['event'])) {
                $event->update($body['event']);
            }

            if (! empty($body['booking'])) {
                $bookingTimezone = $body['booking']['timezone'] ?? BookingTime::timezone($booking);
                $bookingData = BookingTime::normalizePayload($body['booking'], $bookingTimezone);

                if (array_key_exists('timezone', $body['booking'])) {
                    $bookingData['booking_timezone'] = $bookingTimezone;
                }

                if (($bookingData['status'] ?? null) === BookingStatus::Cancelled->value) {
                    $bookingData['cancelled_at'] = now();
                }

                $booking->update($bookingData);
            }

            return [$booking, $event, $oldStatus];
        }, 2);

        $booking->load(['event', 'guests', 'user']);
        $bookingData = $body['booking'] ?? [];
        $eventData = $body['event'] ?? [];

        if (($bookingData['status'] ?? null) === BookingStatus::Cancelled->value) {
            if ($oldStatus !== BookingStatus::Cancelled) {
                retry(3, function () use ($booking): void {
                    app(GoogleCalendarService::class)->cancelBookingEvent($booking);
                }, 500);
            }
        } elseif ($booking->provider_event_id && (
            array_intersect(['starts_at', 'ends_at', 'timezone'], array_keys($bookingData)) !== []
            || array_intersect(['name', 'description'], array_keys($eventData)) !== []
        )) {
            retry(3, function () use ($booking, $bookingData, $eventData): void {
                app(GoogleCalendarService::class)->updateBookingEvent(
                    $booking,
                    array_merge($bookingData, $eventData),
                );
            }, 300);
        }

        return response()->json([
            'message' => 'Meeting updated successfully',
            'event' => $event,
            'booking' => new BookingDetailsResource($booking),
        ]);
    }

    public function destroy(Request $request, string $teamId, string $bookingId)
    {
        $user = $request->user();
        $team = Team::where('id', $teamId)->first();
        if (! $team) {
            abort(404, 'Team not found');
        }
        $this->authorizeBookingManagement($user, $team);

        $booking = $team->bookings()->where('bookings.id', $bookingId)->first();
        if (! $booking) {
            abort(404, 'Booking not found');
        }
        $event = $team->events()->where('id', $booking->event_id)->first();

        retry(3, function () use ($booking): void {
            app(GoogleCalendarService::class)->cancelBookingEvent($booking);
        }, 300);

        $booking->delete();

        if ($event && $event->bookings()->doesntExist()) {
            $event->delete();
        }

        return response()->json([
            'message' => 'Booking deleted successfully',
        ]);
    }

    private function authorizeTeamAccess(User $user, Team $team): void
    {
        $canAccessTeam = $team->owner_id === $user->id
            || $team->members()->whereBelongsTo($user)->exists();

        abort_unless($canAccessTeam, 404, 'Team not found.');
    }

    private function authorizeBookingManagement(User $user, Team $team): void
    {
        $this->authorizeTeamAccess($user, $team);

        $canManageBooking = $team->owner_id === $user->id
            || $team->members()
            ->whereBelongsTo($user)
            ->where('role', TeamRole::Admin->value)
            ->exists();

        abort_unless($canManageBooking, 403, 'You do not have permission to manage team meetings.');
    }
}
