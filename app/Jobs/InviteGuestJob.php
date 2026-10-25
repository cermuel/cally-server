<?php

namespace App\Jobs;

use App\Support\EmailTemplate;
use DateTimeInterface;
use Illuminate\Bus\Batchable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\RateLimiter;
use Resend\Laravel\Facades\Resend;
use Throwable;

class InviteGuestJob implements ShouldQueue
{
    use Batchable, Queueable;

    public int $timeout = 30;

    public int $maxExceptions = 3;

    public function retryUntil(): DateTimeInterface
    {
        return now()->addHours(2);
    }

    public function backoff(): array
    {
        return [30, 90, 180];
    }

    public function __construct(public string $hostName, public string $email, public string $meetingTime, public string $url, public string $name, public ?string $scheduleDescription = null)
    {
        $this->afterCommit();
    }

    public function handle(): void
    {

        $executed = RateLimiter::attempt('invite-guest', 20, function () {
            Resend::emails()->send([
                'from' => 'Cally <cally@cermuel.dev>',
                'to' => [$this->email],
                'subject' => 'Meeting Invitation',
                'html' => $this->scheduleDescription ?
                    EmailTemplate::recurringBookingInvitation(
                        hostName: $this->hostName,
                        meetingTime: $this->meetingTime,
                        invitationUrl: $this->url,
                        name: $this->name,
                        recurrenceSchedule: $this->scheduleDescription
                    ) : EmailTemplate::bookingInvitation(
                        hostName: $this->hostName,
                        meetingTime: $this->meetingTime,
                        invitationUrl: $this->url,
                        name: $this->name,
                    ),
            ]);
        }, 60);

        if (! $executed) {
            $this->release(
                RateLimiter::availableIn('invite-guest') + 1
            );

            return;
        }
    }

    public function failed(Throwable $exception): void
    {
        logger()->error('Meeting invite email failed to send', [
            'email' => $this->email,
            'reason' => $exception->getMessage(),
        ]);
    }
}
