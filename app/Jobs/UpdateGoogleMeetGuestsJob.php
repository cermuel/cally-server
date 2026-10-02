<?php

namespace App\Jobs;


use App\Models\Booking;
use App\Services\GoogleCalendarService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\RateLimiter;
use Throwable;

class UpdateGoogleMeetGuestsJob implements ShouldQueue
{
    use Queueable;

    public int $tries = 3;
    public int $timeout = 45;
    public function backoff(): array
    {
        return [30, 90, 180];
    }

    public function __construct(public int $bookingId, public bool $isAdd, public string $email, public ?string $name) {}


    public function handle(): void
    {
        $executed = RateLimiter::attempt('update-google-meet-guests', 10, function () {
            $booking = Booking::with(['event', 'guests'])->findOrFail($this->bookingId);

            if (! $booking->provider_event_id) {
                return;
            }

            if ($this->isAdd) {
                app(GoogleCalendarService::class)->addGuests($booking, [[
                    'email' => $this->email,
                    'name' => $this->name
                ]]);
            } else {
                app(GoogleCalendarService::class)->removeGuests($booking, [$this->email]);
            }
        }, 60);

        if (! $executed) {
            $this->release(60);
        }
    }


    public function failed(Throwable $exception): void
    {
        logger()->error('Google Calendar guest sync failed', [
            'booking_id' => $this->bookingId,
            'email' => $this->email,
            'is_add' => $this->isAdd,
            'reason' => $exception->getMessage(),
        ]);
    }
}
