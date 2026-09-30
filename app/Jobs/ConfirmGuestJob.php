<?php

namespace App\Jobs;

use App\Support\EmailTemplate;
use Illuminate\Bus\Batchable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\RateLimiter;
use Resend\Laravel\Facades\Resend;
use Throwable;

class ConfirmGuestJob implements ShouldQueue
{
    use Batchable, Queueable;

    public int $timeout = 30;

    public int $tries = 3;

    public function backoff(): array
    {
        return [30, 90, 180];
    }

    public function __construct(public string $hostName, public string $email, public string $meetingTime, public string $url, public string $name)
    {
        $this->afterCommit();
    }

    public function handle(): void
    {

        $executed = RateLimiter::attempt('invite-guest', 5, function () {
            Resend::emails()->send([
                'from' => 'Cally <cally@cermuel.dev>',
                'to' => [$this->email],
                'subject' => 'Meeting Confirmation',
                'html' => EmailTemplate::bookingConfirmation(
                    name: $this->name,
                    hostName: $this->hostName,
                    meetingTime: $this->meetingTime,
                    bookingUrl: $this->url,

                ),
            ]);
        }, 60);

        if (! $executed) {
            $this->release();
        }
    }

    public function failed(Throwable $exception): void
    {
        logger()->error('Meeting confirmation email failed to send', [
            'email' => $this->email,
            'reason' => $exception->getMessage(),
        ]);
    }
}
