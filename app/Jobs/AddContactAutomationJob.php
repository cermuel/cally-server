<?php

namespace App\Jobs;

use App\Models\Contact;
use DateTimeInterface;
use Illuminate\Bus\Batchable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\RateLimiter;
use Throwable;

class AddContactAutomationJob implements ShouldQueue
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

    public function __construct(public string $email, public string $name, public int $userId) {}


    public function handle(): void
    {
        if ($this->batch()?->cancelled()) return;

        $executed = RateLimiter::attempt('add-contact-automation', 20, function () {
            $exists = Contact::where('email', $this->email)->exists();
            if ($exists) return;

            Contact::create(['email' => $this->email, 'user_id' => $this->userId, 'name' => $this->name]);
        }, 60);

        if (!$executed) {
            $this->release(
                RateLimiter::availableIn('add-contact-automation') + 1
            );

            return;
        }
    }

    public function failed(Throwable $exception): void
    {
        logger()->error('Add contact automation email failed to create', [
            'email' => $this->email,
            'reason' => $exception->getMessage(),
        ]);
    }
}
