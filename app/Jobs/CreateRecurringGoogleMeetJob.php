<?php

namespace App\Jobs;

use App\GuestStatus;
use App\Models\Booking;
use App\Models\Recurrence;
use App\Services\GoogleCalendarService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\RateLimiter;
use Throwable;

class CreateRecurringGoogleMeetJob implements ShouldQueue
{
    use Queueable;

    public int $tries = 5;

    public int $timeout = 45;

    public function backoff(): array
    {
        return [5, 10, 20];
    }

    public function __construct(public int $recurrenceId) {}

    public function handle(): void
    {
        $executed = RateLimiter::attempt('create-google-meet', 3, function () {
            $recurrence = Recurrence::findOrFail($this->recurrenceId);

            $booking = Booking::with('guests')
                ->where('recurrence_id', $recurrence->id)
                ->orderBy('starts_at')
                ->firstOrFail();

            if ($booking->provider_event_id) {
                return;
            }

            $confirmedGuests = $booking->guests
                ->filter(
                    fn ($guest) => $guest->attendance_status === GuestStatus::Confirmed
                )
                ->map(fn ($guest) => [
                    'email' => $guest->email,
                    'name' => $guest->name,
                ])
                ->values()
                ->all();

            $googleEvent = app(GoogleCalendarService::class)
                ->createRecurringEvent($recurrence, $confirmedGuests);

            Booking::where('recurrence_id', $recurrence->id)->update([
                'provider' => 'google',
                'provider_event_id' => $googleEvent->getId(),
                'meeting_url' => $googleEvent->getHangoutLink(),
            ]);
        }, 60);

        if (! $executed) {
            $this->release(60);
        }
    }

    public function failed(Throwable $exception): void
    {
        logger()->error('Recurring google meet creation email failed', [
            'recurrence_id' => $this->recurrenceId,
            'reason' => $exception->getMessage(),
            'trace' => $exception->getTraceAsString(),
        ]);
    }
}
