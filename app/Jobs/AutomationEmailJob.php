<?php

namespace App\Jobs;

use App\Models\Automation;
use App\Models\Booking;
use App\Services\AutomationService;
use Illuminate\Bus\Batchable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Resend\Laravel\Facades\Resend;
use Throwable;

class SendAutomationEmailJob implements ShouldQueue
{
    use Batchable, Queueable;

    public int $timeout = 30;

    public int $tries = 3;

    public function backoff(): array
    {
        return [30, 90, 180];
    }

    public function __construct(
        public int $automationId,
        public int $bookingId,
        public string $email,
    ) {}

    public function handle(): void
    {
        $automation = Automation::findOrFail($this->automationId);

        $booking = Booking::with(['event', 'user', 'guests'])->findOrFail($this->bookingId);

        $guest = $booking->guests()->where('email', $this->email)->first();

        if (! $guest) {
            return;
        }

        $subject = app(AutomationService::class)->handleEmailString(
            $automation->payload['subject'],
            $guest->email,
            $booking
        );

        $body = app(AutomationService::class)->handleEmailString(
            $automation->payload['body'],
            $guest->email,
            $booking
        );

        Resend::emails()->send([
            'from' => 'Cally <cally@cermuel.dev>',
            'to' => [$this->email],
            'subject' => $subject,
            'html' => nl2br(e($body)),
        ]);
    }

    public function failed(Throwable $exception)
    {
        logger()->error('Send automation email failed', [
            'booking_id' => $this->bookingId,
            'reason' => $exception->getMessage(),
            'trace' => $exception->getTraceAsString(),
        ]);
    }
}
