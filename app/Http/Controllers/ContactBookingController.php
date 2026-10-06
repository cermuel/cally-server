<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookingRequest;
use App\Http\Resources\ContactResource;
use App\Models\Contact;
use App\Support\BookingTime;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ContactBookingController extends Controller
{
    public function store(BookingRequest $request, Contact $contact): JsonResponse
    {
        abort_unless($contact->user_id === $request->user()->id, 404);

        $body = BookingTime::normalizePayload(
            $request->validated(),
            $request->user()->timezone,
        );
        $body['contact_id'] = $contact->id;

        $booking = $request->user()->bookings()->create($body);
        $booking->load(['contact', 'event', 'guests']);

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
