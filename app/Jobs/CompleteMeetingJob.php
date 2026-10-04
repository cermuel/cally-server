<?php

namespace App\Jobs;

use App\AutomationTrigger;
use App\BookingStatus;
use App\Models\Booking;
use App\Services\AutomationService;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Throwable;

class CompleteMeetingJob implements ShouldQueue
{
    use Queueable;

    public int $timeout = 30;

    public int $tries = 3;

    public function backoff(): array
    {
        return [30, 90, 180];
    }

    public function __construct(public int $bookingId)
    {
        $this->afterCommit();
    }

    public function handle(): void
    {
        $booking = Booking::where('id', $this->bookingId)->first();

        if (! $booking) {
            return;
        }

        $booking->update([
            'status' => BookingStatus::Completed,
        ]);

        app(AutomationService::class)->run(
            AutomationTrigger::BookingEnded,
            $booking->fresh()
        );
    }

    public function failed(Throwable $exception): void
    {
        logger()->error('Failed to complete booking', [
            'booking_id' => $this->bookingId,
            'reason' => $exception->getMessage(),
        ]);
    }
}
