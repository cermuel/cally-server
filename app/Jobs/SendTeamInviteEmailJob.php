<?php

namespace App\Jobs;

use App\Support\EmailTemplate;
use Illuminate\Bus\Batchable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\RateLimiter;
use Resend\Laravel\Facades\Resend;
use Throwable;

class SendTeamInviteEmailJob implements ShouldQueue
{
    use Batchable, Queueable;

    public int $tries = 3;

    public int $timeout = 30;

    public function backoff(): array
    {
        return [20, 60, 180];
    }

    public function __construct(
        public string $email,
        public string $inviterName,
        public string $teamName,
        public string $url,
        public string $expires = 'seven days',
    ) {}

    public function handle(): void
    {
        $executed = RateLimiter::attempt('send-invite-email', 60, function () {
            Resend::emails()->send([
                'from' => 'Cally <cally@cermuel.dev>',
                'to' => [$this->email],
                'subject' => 'You have been invited',
                'html' => EmailTemplate::teamInvitation(inviterName: $this->inviterName, teamName: $this->teamName, invitationUrl: $this->url, expiresIn: $this->expires),
            ]);
        }, 60);

        if (! $executed) {
            $this->release(max(1, RateLimiter::availableIn('send-invite-email')));
        }
    }

    public function failed(Throwable $exception): void
    {
        logger()->error('Sending team invite email failed', [
            'reason' => $exception->getMessage(),
        ]);
    }
}
