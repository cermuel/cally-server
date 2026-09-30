<?php

namespace App\Http\Controllers;

use App\GuestStatus;
use App\Http\Requests\BookingRequest;
use App\Http\Resources\BookingDetailsResource;
use App\Models\Booking;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index(Request $request)
    {
        $filters = $request->only(['status', 'provider_id', 'date', 'event_id']);
        $user = $request->user();

        $bookings = Booking::with('guests')->where('user_id', $user->id)->filter($filters)->latest()->paginate();

        return response()->json(['message' => 'Bookings fetched successfully', 'bookings' => $bookings]);
    }

    public function store(BookingRequest $request)
    {
        $body = $request->validated();
        $user = $request->user();

        $booking = $user->bookings()->create($body);

        return response()->json(['message' => 'Bookings created successfully', 'booking' => $booking]);
    }

    public function show(string $id)
    {
        $booking = Booking::with('guests')->where('id', $id)->where('is_profile', true)->first();

        if (! $booking) {
            return response()->json(['message' => 'Booking not found'], 404);
        }

        return response()->json(['link' => $booking, 'message' => 'Booking fetched successfully']);
    }

    public function getBookingDetails(string $id): JsonResponse
    {
        $booking = Booking::query()
            ->with([
                'event:id,name,slug,duration_minutes',
                'user:id,name,email,avatar_url,timezone',
                'guests' => function (HasMany $query): void {
                    $query
                        ->select(['id', 'booking_id', 'name', 'email', 'attendance_status', 'created_at', 'updated_at'])
                        ->where('attendance_status', GuestStatus::Confirmed->value);
                },
            ])
            ->find($id);

        if (! $booking) {
            return response()->json(['message' => 'Booking not found'], 404);
        }

        return response()->json([
            'booking' => new BookingDetailsResource($booking),
            'message' => 'Booking fetched successfully',
        ]);
    }

    public function update(BookingRequest $request, string $id)
    {
        $booking = Booking::where('id', $id)->first();
        $body = $request->validated();

        if (! $booking) {
            return response()->json(['message' => 'Booking not found'], 404);
        }

        if ($body['status'] == 'cancelled') {
            $body['cancelled_at'] = now();
        }

        if ($body['start_date'] ?? false) {
            // handle reschedule booking
        }

        $booking->update($body);

        return response()->json(['link' => $booking, 'message' => 'Booking updated successfully']);
    }

    public function destroy(string $id)
    {
        $booking = Booking::where('id', $id)->with('user')->first();

        if (! $booking) {
            return response()->json(['message' => 'Booking deleted successfully']);
        }
        $booking->delete();

        return response()->json(['message' => 'Booking deleted successfully']);
    }
}
