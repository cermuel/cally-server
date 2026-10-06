<?php

namespace App\Http\Controllers;

use App\BookingStatus;
use App\GuestStatus;
use App\Http\Requests\BookingRequest;
use App\Http\Resources\BookingDetailsResource;
use App\Jobs\CompleteMeetingJob;
use App\Jobs\UpdateGoogleMeetGuestsJob;
use App\Models\Booking;
use App\Services\GoogleCalendarService;
use App\Support\BookingTime;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index(Request $request)
    {
        $filters = $request->only(['status', 'provider_id', 'date', 'event_id']);
        $user = $request->user();

        $bookings = Booking::with(['contact', 'guests'])->where('user_id', $user->id)->filter($filters)->latest()->paginate();

        return response()->json(['message' => 'Bookings fetched successfully', 'bookings' => $bookings]);
    }

    public function store(BookingRequest $request)
    {
        $body = $request->validated();
        $user = $request->user();
        $body = BookingTime::normalizePayload($body, $user->timezone);

        $booking = $user->bookings()->create($body);
        $booking->load('contact');

        return response()->json(['message' => 'Bookings created successfully', 'booking' => $booking]);
    }

    public function show(Request $request, string $id): JsonResponse
    {
        $booking = $request->user()
            ->bookings()
            ->with(['contact', 'guests'])
            ->findOrFail($id);

        return response()->json(['booking' => $booking, 'message' => 'Booking fetched successfully']);
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
        $user = $request->user();
        $booking = $user->bookings()->findOrFail($id);
        $body = BookingTime::normalizePayload(
            $request->validated(),
            $booking->booking_timezone ?? $user->timezone,
        );

        if (($body['status'] ?? null) === BookingStatus::Cancelled->value) {
            $body['cancelled_at'] = now();
        }

        $oldStatus = $booking->status;
        $booking->update($body);

        if ($body['status'] ?? false) {
            $status = $body['status'];

            if ($status == BookingStatus::Cancelled->value && $oldStatus != BookingStatus::Cancelled->value) {
                retry(3, function () use ($booking) {
                    app(GoogleCalendarService::class)->cancelBookingEvent($booking);
                }, 500);
            }
            if ($status == BookingStatus::Confirmed->value && $oldStatus != BookingStatus::Confirmed->value) {
                UpdateGoogleMeetGuestsJob::dispatch($booking->id, true, $user->email, $user->name)->onQueue('meeting');
                CompleteMeetingJob::dispatch($booking->id)->onQueue('meeting')->delay($booking->ends_at);
            }
        }
        if ($body['starts_at'] ?? false) {
            // handle reschedule booking proper
            // pending send user invite mail
            retry(3, function () use ($booking, $body) {
                app(GoogleCalendarService::class)->updateBookingEvent($booking, $body);
            }, 300);
        }

        $booking->load('contact');

        return response()->json(['booking' => $booking, 'message' => 'Booking updated successfully']);
    }

    public function destroy(Request $request, string $id): JsonResponse
    {
        $booking = $request->user()->bookings()->with('user')->findOrFail($id);
        if (now()->lessThan($booking->ends_at) && $booking->status !== BookingStatus::Cancelled) {
            retry(3, function () use ($booking) {
                app(GoogleCalendarService::class)->cancelBookingEvent($booking);
            }, 300);
        }
        $booking->delete();

        return response()->json(['message' => 'Booking deleted successfully']);
    }
}
