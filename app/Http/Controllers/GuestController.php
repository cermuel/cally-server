<?php

namespace App\Http\Controllers;

use App\GuestStatus;
use App\Http\Requests\GuestRequest;
use App\Jobs\ConfirmGuestJob;
use App\Jobs\InviteGuestJob;
use App\Models\Booking;
use App\Models\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Bus;
use Illuminate\Support\Facades\DB;

class GuestController extends Controller
{
    public function index(Request $request)
    {
        $booking_id = $request['booking_id'];

        $guests = Guest::with('booking')->where('booking_id', $booking_id);

        return response()->json([
            'message' => 'Guests fetched successfully',
            'guests' => $guests,
        ]);
    }

    public function store(GuestRequest $request)
    {
        $body = $request->validated();

        $booking = Booking::with('user')->find($body['booking_id']);

        if (! $booking) {
            return response()->json(['message' => 'Booking not found'], 404);
        }

        $createdGuests = DB::transaction(function () use ($body, $booking) {
            $createdGuests = collect($body['guests'])->map(function ($guest) use ($booking) {
                return $booking->guests()->create($guest);
            });
            $frontendUrl = config('services.frontend_url');
            $url = $frontendUrl.'/public/'.$booking->id.'/request';
            $confirmationUrl = $frontendUrl.'/public/'.$booking->id;
            $meetingTime = $booking->starts_at?->format('H:i') ?? '';

            $jobs = $createdGuests->filter(function ($guest) {
                return $guest->attendance_status == GuestStatus::Pending;
            })->map(function ($guest) use ($booking, $meetingTime, $url) {
                return new InviteGuestJob(
                    $booking->user->name,
                    $guest->email,
                    $meetingTime,
                    $url.'?email='.urlencode($guest->email),
                    $guest->name
                );
            })->toArray();

            $confirmedJobs = $createdGuests->filter(function ($guest) {
                return $guest->attendance_status == GuestStatus::Confirmed;
            })->map(function ($guest) use ($booking, $confirmationUrl, $meetingTime) {
                return new ConfirmGuestJob(
                    $booking->user->name,
                    $guest->email,
                    $meetingTime,
                    $confirmationUrl.'?email='.urlencode($guest->email),
                    $guest->name ?? 'there'
                );
            })->toArray();

            Bus::batch($jobs)
                ->name('meeting-invite')->onQueue('meeting-invite')
                ->dispatch();
            Bus::batch($confirmedJobs)
                ->name('meeting-confirm')->onQueue('meeting-confirm')
                ->dispatch();

            return $createdGuests;
        });

        return response()->json([
            'message' => 'Guests added successfully',
            'guests' => $createdGuests,
        ], 201);
    }

    public function guestByEmail(Request $request, string $email)
    {
        $booking_id = $request['booking_id'];

        $guest = Guest::where('email', $email)->where('booking_id', $booking_id)->first();

        if (! $guest) {
            return response()->json(['message' => 'Guest not found'], 404);
        }

        return response()->json([
            'message' => 'Guests fetched successfully',
            'guests' => $guest,
        ]);
    }

    public function update(GuestRequest $request, string $id)
    {
        $body = $request->validated();

        $guest = Guest::where('id', $id)->first();

        if (! $guest) {
            return response()->json(['message' => 'Guest not found'], 404);
        }

        $booking = Booking::with('user')->find($guest->booking_id);

        if (! $booking) {
            return response()->json(['message' => 'Booking not found'], 404);
        }

        if ($booking->starts_at !== null && now()->greaterThan($booking->starts_at)) {
            return response()->json(['message' => 'Cannot edit guest details as meeting has occured'], 400);
        }

        $oldstatus = $guest->attendance_status;
        $guest->update($body);

        if ($body['attendance_status'] ?? false && $body['attendance_status'] == GuestStatus::Confirmed && $oldstatus != GuestStatus::Confirmed) {
            $frontendUrl = config('services.frontend_url');
            $confirmationUrl = $frontendUrl.'/public/'.$booking->id;
            ConfirmGuestJob::dispatch(
                $booking->user->name,
                $guest->email,
                $booking->starts_at?->format('H:i') ?? '',
                $confirmationUrl.'?email='.urlencode($guest->email),
                $guest->name ?? 'there'
            )->onQueue('meeting-confirm');
        }

        return response()->json([
            'message' => 'Guests updated successfully',
            'guests' => $guest,
        ]);
    }

    public function destroy(string $id)
    {
        $guest = Guest::where('id', $id)->first();

        if (! $guest) {
            return response()->json(['message' => 'Guest not found'], 404);
        }

        $guest->delete();

        return response()->json([
            'message' => 'Guests deleted successfully',
        ]);
    }
}
