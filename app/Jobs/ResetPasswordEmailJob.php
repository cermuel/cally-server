<?php

namespace App\Jobs;

use App\Support\EmailTemplate;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\RateLimiter;
use Resend\Laravel\Facades\Resend;
use Throwable;

class ResetPasswordEmailJob implements ShouldQueue
{
    use Queueable;

    public int $tries = 3;

    public int $timeout = 30;

    public function backoff(): array
    {
        return [10, 30, 60];
    }

    public function __construct(public string $email, public string $name, public string $url) {}

    public function handle(): void
    {
        $executed = RateLimiter::attempt(
            'reset-password-job',
            5,
            function () {
                Resend::emails()->send([
                    'from' => 'Cally <cally@cermuel.dev>',
                    'to' => [$this->email],
                    'subject' => 'Reset password',
                    'html' => EmailTemplate::resetPassword(
                        name: $this->name,
                        resetUrl: $this->url,
                        expiresIn: 'one hour',
                    ),
                ]);
            },
            60
        );

        if (!$executed) $this->release();
    }

    public function failed(Throwable $exception): void
    {
        logger()->error('Reset password email failed to send', [
            'email' => $this->email,
            'reason' => $exception->getMessage(),
        ]);
    }
}
