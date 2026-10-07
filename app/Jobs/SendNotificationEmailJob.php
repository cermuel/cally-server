<?php

namespace App\Jobs;

use App\Support\EmailTemplate;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\RateLimiter;
use Resend\Laravel\Facades\Resend;
use Throwable;

class SendNotificationEmailJob implements ShouldQueue
{
    use Queueable;

    public int $timeout = 30;

    public int $tries = 3;

    public function backoff(): array
    {
        return [30, 90, 180];
    }

    public function __construct(
        public string $email,
        public ?string $name,
        public string $title,
        public ?string $message,
        public ?string $actionUrl,
    ) {
        $this->afterCommit();
    }

    public function handle(): void
    {
        $executed = RateLimiter::attempt('notification-email', 5, function (): void {
            Resend::emails()->send([
                'from' => 'Cally <cally@cermuel.dev>',
                'to' => [$this->email],
                'subject' => $this->title,
                'html' => EmailTemplate::notification(
                    title: $this->title,
                    message: $this->message,
                    actionUrl: $this->actionUrl,
                    name: $this->name,
                ),
            ]);
        }, 60);

        if (! $executed) {
            $this->release();
        }
    }

    public function failed(Throwable $exception): void
    {
        logger()->error('Notification email failed to send', [
            'email' => $this->email,
            'reason' => $exception->getMessage(),
        ]);
    }
}
