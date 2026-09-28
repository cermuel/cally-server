<?php

namespace App\Jobs;

use App\Support\EmailTemplate;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\RateLimiter;
use Resend\Laravel\Facades\Resend;

class VerifyEmailJob implements ShouldQueue
{
    use Queueable;

    public int $tries = 3;

    public int $timeout = 30;

    public function backoff(): array
    {
        return [10, 30, 60];
    }
    public function __construct(public string $email, public string $verifyUrl) {}

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        RateLimiter::attempt('verify-email', 5, function () {
            Resend::emails()->send([
                'from' => 'Cally <cally@cermuel.dev>',
                'to' => [$this->email],
                'subject' => 'You are one step away',
                'html' => EmailTemplate::verifyEmail(
                    verifyUrl: $this->verifyUrl,
                    expiresIn: 'one hour',
                ),
            ]);
        }, 60);
    }
}
