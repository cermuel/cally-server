<?php

namespace App\Jobs;

use App\GuestStatus;
use App\Models\Booking;
use App\Services\GoogleCalendarService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\RateLimiter;
use Throwable;

class CreateGoogleMeetJob implements ShouldQueue
{
    use Queueable;

    public int $tries = 5;
    public int $timeout = 45;
    public function backoff(): array
    {
        return [5, 10, 20];
    }

    public function __construct(public int $bookingId) {}


    public function handle(): void
    {
        $executed = RateLimiter::attempt('create-google-meet', 3, function () {
            $booking = Booking::with(['event', 'guests'])->findOrFail($this->bookingId);

            $confirmedGuests = $booking->guests
                ->filter(fn($guest) => $guest->attendance_status === GuestStatus::Confirmed)
                ->map(fn($guest) => [
                    'email' => $guest->email,
                    'name' => $guest->name,
                ])
                ->values()
                ->all();

            $googleEvent = app(GoogleCalendarService::class)->createBookingEvent($booking, $confirmedGuests);

            $booking->update([
                'provider' => 'google',
                'provider_event_id' => $googleEvent->getId(),
                'meeting_url' => $googleEvent->getHangoutLink(),
            ]);
        }, 60);

        if (! $executed) {
            $this->release(60);
        }
    }


    public function failed(Throwable $exception)
    {
        logger()->error('Google meet creation email failed', [
            'booking_id' => $this->bookingId,
            'reason' => $exception->getMessage(),
            'trace' => $exception->getTraceAsString(),
        ]);
    }
}
