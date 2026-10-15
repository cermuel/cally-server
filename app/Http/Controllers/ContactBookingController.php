<?php

namespace App\Http\Controllers;

use App\AutomationTrigger;
use App\GuestStatus;
use App\Http\Requests\BookingRequest;
use App\Http\Resources\ContactResource;
use App\Jobs\CreateGoogleMeetJob;
use App\Jobs\InviteGuestJob;
use App\Models\Contact;
use App\Services\AutomationService;
use App\Support\BookingTime;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

class ContactBookingController extends Controller
{
    public function __construct(private AutomationService $automationService) {}

    public function store(BookingRequest $request, Contact $contact): JsonResponse
    {
        abort_unless($contact->user_id === $request->user()->id, 404);

        $user = $request->user();

        $body = BookingTime::normalizePayload(
            $request->validated(),
            $request->user()->timezone,
        );
        $body['contact_id'] = $contact->id;

        $body['starts_at'] = BookingTime::toUtc($body['starts_at'], $user['timezone']);
        $body['ends_at'] = BookingTime::toUtc($body['ends_at'], $user['timezone']);
        $lock = Cache::lock('booking-event-' . $body['event_id'] . '-starts-' . $body['starts_at']->getTimestamp(), 10);

        if (! $lock->get()) {
            return response()->json([
                'message' => 'This slot is currently reserved. Please try again.',
            ], 423);
        }

        try {
            $booking =  DB::transaction(function () use ($request, $body, $contact) {
                $booking = $request->user()->bookings()->create($body);

                $booking->load('user');
                $booking->guests()->create([
                    'name' => $contact->name ?? 'there',
                    'email' => $contact->email,
                    'attendance_status' => GuestStatus::Pending->value
                ]);
                $this->automationService->run(AutomationTrigger::BookingCreated, $booking, null);
                CreateGoogleMeetJob::dispatch($booking->id)->onQueue('meeting');
                $frontendUrl = config('services.frontend_url');
                $hostName = $booking->user->name ?? 'Host';
                $meetingTime = BookingTime::formatForGuest($booking, $booking->starts_at);
                $invitationPath = $frontendUrl . '/public/' . $booking->id . '/request';

                InviteGuestJob::dispatch(
                    $hostName,
                    $contact->email,
                    $meetingTime,
                    $invitationPath . '?email=' . urlencode($contact->email),
                    $guest->name ?? 'there',
                )->onQueue('meeting-invite');


                return $booking;
            }, 2);
        } finally {
            $lock->release();
        }

        return response()->json([
            'message' => 'Contact booking created successfully',
            'booking' => $booking,
        ], 201);
    }

    public function index(Request $request, Contact $contact): JsonResponse
    {
        abort_unless($contact->user_id === $request->user()->id, 404);

        $perPage = min(max($request->integer('per_page', 15), 1), 100);

        $bookings = $contact->bookings()
            ->with([
                'event:id,name,slug,duration_minutes',
                'user:id,name,email,avatar_url,timezone',
                'guests',
            ])
            ->latest('starts_at')
            ->paginate($perPage)
            ->withQueryString();

        $contact->load(['platformUser', 'owner']);
        $contact->setRelation('bookings', $bookings->getCollection());

        return response()->json([
            'message' => 'Contact bookings fetched successfully',
            'contact' => new ContactResource($contact),
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
}
