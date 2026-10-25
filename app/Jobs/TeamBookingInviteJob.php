<?php

namespace App\Jobs;

use App\Models\Booking;
use App\Models\User;
use App\Services\NotificationService;
use DateTimeInterface;
use Illuminate\Bus\Batchable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\RateLimiter;
use Throwable;

class TeamBookingInviteJob implements ShouldQueue
{
    use Batchable, Queueable;

    public int $maxExceptions = 3;

    public function retryUntil(): DateTimeInterface
    {
        return now()->addHours(2);
    }

    public function backoff(): array
    {
        return [10, 60, 180];
    }

    public int $timeout = 60;

    public function __construct(public int $teamId, public int $userId, public int $bookingId, public string $frontendUrl) {}

    public function handle(): void
    {
        if ($this->batch()->cancelled()) {
            return;
        }
        $executed = RateLimiter::attempt('team-meeting-invite', 10, function () {
            $user = User::where('id', $this->userId)->first();
            $booking = Booking::where('id', $this->bookingId)->first();
            if (! $booking || ! $user) {
                return;
            }
            $booking->loadMissing(['event']);
            app(NotificationService::class)->send($user, 'booking.created', "New booking for {$booking->event->name}", null, "{$this->frontendUrl}/app/teams/{$this->teamId}?booking_id={$booking->id}", ['booking_id' => $booking->id]);
        }, 60);

        if (! $executed) {
            $this->release(max(1, RateLimiter::availableIn('team-meeting-invite')) + 1);
        }
    }

    public function failed(Throwable $exception): void
    {
        logger()->error('Reschedule request email failed to send', [
            'teamId' => $this->teamId,
            'userId' => $this->userId,
            'bookingid' => $this->bookingId,
            'reason' => $exception->getMessage(),
        ]);
    }
}
