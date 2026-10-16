<?php

namespace App\Jobs;

use App\Models\RescheduleResponse;
use App\RescheduleStatus;
use App\Support\EmailTemplate;
use DateTimeInterface;
use Illuminate\Bus\Batchable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\RateLimiter;
use Resend\Laravel\Facades\Resend;
use Throwable;

class RescheduleMeetingInviteJob implements ShouldQueue
{
    use Queueable, Batchable;

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

    public function __construct(public string $responseId, public string $email, public string $requesterName, public string $meetingName, public string $currentTime, public string $proposedTime, public string $url, public ?string $name = null) {}


    public function handle(): void
    {
        if ($this->batch()?->cancelled()) {
            return;
        }
        $executed = RateLimiter::attempt("reschedule-invite", 30, function () {
            $response = RescheduleResponse::where('id', $this->responseId)->whereNotNull('guest_id')->where('status', RescheduleStatus::Pending->value)->first();
            if (!$response) return;

            Resend::emails()->send([
                'from' => 'Cally <cally@cermuel.dev>',
                'to' => [$this->email],
                'subject' => 'Meeting Invitation',
                'html' => EmailTemplate::meetingRescheduleRequest(
                    requesterName: $this->requesterName,
                    meetingName: $this->meetingName,
                    currentMeetingTime: $this->currentTime,
                    proposedMeetingTime: $this->proposedTime,
                    responseUrl: $this->url

                ),
            ]);
        }, 60);


        if (!$executed) {
            $this->release(
                RateLimiter::availableIn('reschedule-invite') + 1
            );

            return;
        }
    }

    public function failed(Throwable $exception): void
    {
        logger()->error('Reschedule request email failed to send', [
            'email' => $this->responseId,
            'reason' => $exception->getMessage(),
        ]);
    }
}
