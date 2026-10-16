<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Reschedule;
use App\RescheduleStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RescheduleController extends Controller
{
    public string $frontendUrl;
    public function __construct(public PublicController $publicController)
    {
        $this->frontendUrl = config('services.frontend_url');
    }

    public function index(Request $request)
    {
        $booking_id = $request['booking_id'];

        $reschedules = Reschedule::where('booking_id', $booking_id)->get();

        return response()->json(['message' => 'Reschedules fetched successfully', 'reschedules' => $reschedules]);
    }

    public function store(Request $request, string $bookingId)
    {
        $user = $request->user();
        $body = $request->validate([
            'starts_at' => ['required', 'date', 'before:ends_at'],
            'ends_at' => ['required', 'date', 'after:starts_at'],
        ]);

        $booking = Booking::with('guests')->where('id', $bookingId)->first();

        if (!$booking) abort(404, 'Invalid or deleted booking');

        $hasPendingReschedule = $booking->reschedule()
            ->where('status', RescheduleStatus::Pending->value)
            ->exists();

        if ($hasPendingReschedule) abort(409, 'This booking already has a pending reschedule request.');

        $reschedule = DB::transaction(function () use ($body, $booking, $user) {
            $reschedule = $booking->reschedule()->create([
                'starts_at' => $body['starts_at'],
                'ends_at' => $body['ends_at'],
            ]);

            foreach ($booking->guests as $guest) {
                $reschedule->responses()->create([
                    'guest_id' => $guest->id,
                    'status' => RescheduleStatus::Pending,
                    'email' => $guest->email,
                ]);
            }

            return $reschedule;
        }, 2);

        $this->publicController->dispatchInviteEmailBatches($reschedule, $booking, $user['name'] ?? $user['email']);

        return response()->json([
            'message' => 'Meeting request submitted successfully',
            'reschedule' => $reschedule,
        ], 201);
    }


    public function show(string $id)
    {
        $reschedule = Reschedule::where('id', $id)->first();

        if (!$reschedule) abort(404, 'Reschedule fetched successfully');

        return response()->json(['message' => 'Reschedule fetched successfully', $reschedule]);
    }
}
