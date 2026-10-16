<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Reschedule;
use App\Models\RescheduleResponse;
use App\RescheduleStatus;
use App\Services\GoogleCalendarService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class RescheduleResponseController extends Controller
{
    public function responseByEmail(Request $request, string $email)
    {
        $body = $request->validate([
            'reschedule_id' => ['required', 'integer', 'exists:reschedules,id'],
        ]);

        $response = RescheduleResponse::with('guest')->where('email', $email)->where('reschedule_id', $body['reschedule_id'])->first();

        if (! $response) abort(404, 'Response not found');

        return response()->json([
            'message' => 'Response fetched successfully',
            'response' => $response,
        ]);
    }

    public function update(Request $request, string $id)
    {
        $body = $request->validate(['status' => ['required', Rule::enum(RescheduleStatus::class)]]);

        $response = RescheduleResponse::where('id', $id)->first();

        if (! $response) abort(404, 'Response not found');

        if ($response->status !== RescheduleStatus::Pending) {
            abort(409, 'You have already responded.');
        }

        $response = DB::transaction(function () use ($body, $response) {
            $response->update($body);

            $reschedule = Reschedule::findOrFail($response->reschedule_id);

            if ($response->status === RescheduleStatus::Declined) {
                $reschedule->update([
                    'status' => RescheduleStatus::Declined,
                ]);
                return $response;
            }

            $notAcceptedResponse = RescheduleResponse::where('reschedule_id', $response['reschedule_id'])
                ->where('status', '!=', RescheduleStatus::Accepted->value)
                ->exists();

            if (!$notAcceptedResponse) {
                $reschedule->update([
                    'status' => RescheduleStatus::Accepted,
                ]);
                $booking = Booking::where('id', $reschedule['booking_id'])->firstOrFail();
                $data = ['starts_at' => $reschedule['starts_at'], 'ends_at' => $reschedule['ends_at']];
                $booking->update($data);
                app(GoogleCalendarService::class)->updateBookingEvent($booking, $data);
            }
            return $response;
        }, 3);

        return response()->json([
            'message' => 'Response updated successfully',
            'response' => $response,
        ]);
    }
}
