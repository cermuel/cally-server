<?php

namespace App\Jobs;

use App\Models\Otp;
use App\Support\EmailTemplate;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\RateLimiter;
use Resend\Laravel\Facades\Resend;
use Throwable;

class SendOTPJob implements ShouldQueue
{
    use Queueable;

    protected $tries = 3;

    protected $timeout = 30;

    protected $backoff = [5, 15, 60];

    public function __construct(public string $email, public string $code, public string $challengeId, public ?string $title = 'Login with your OTP') {}

    public function handle(): void
    {
        $executed = RateLimiter::attempt('send_email_job', 3, function () {
            $otp = Otp::with('user')->where('challenge_id', $this->challengeId)->first();
            if (! $otp || now()->greaterThan($otp->expires_at)) {
                return;
            }
            Resend::emails()->send([
                'from' => 'Cally <cally@cermuel.dev>',
                'to' => [$this->email],
                'subject' => $this->title,
                'html' => EmailTemplate::otp($this->code, '10 minutes'),
            ]);
        }, 60);

        if (! $executed) {
            $this->release();
        }
    }

    public function failed(Throwable $exception): void
    {
        logger()->error('Login OTP email failed to send', [
            'email' => $this->email,
            'reason' => $exception->getMessage(),
        ]);
    }
}
