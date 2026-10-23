<?php

namespace App\Jobs;

use App\BookingStatus;
use App\GuestStatus;
use App\Models\Booking;
use App\Models\Contact;
use App\Models\Recurrence;
use Illuminate\Bus\Batchable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Support\Facades\DB;
use Throwable;

class CreateRecurringBookings implements ShouldQueue
{
    use Batchable, Queueable;

    public int $tries = 5;

    public int $timeout = 45;

    public function backoff(): array
    {
        return [5, 10, 20];
    }

    public function __construct(public int $userId, public array $occurrence, public int $eventId, public int $recurrenceId, public string $timezone, public ?int $contactId) {}

    public function handle(): void
    {
        if ($this->batch()?->cancelled()) {
            return;
        }

        $recurrence = Recurrence::where('id', $this->recurrenceId)->first();

        if (! $recurrence) {
            return;
        }

        DB::transaction(function () {
            $contact = Contact::where('id', $this->contactId)->first();

            $booking = Booking::firstOrCreate([
                'recurrence_id' => $this->recurrenceId,
                'starts_at' => $this->occurrence['starts_at'],
            ], [
                'user_id' => $this->userId,
                'event_id' => $this->eventId,
                'ends_at' => $this->occurrence['ends_at'],
                'booking_timezone' => $this->timezone,
                'status' => BookingStatus::Pending,
                'contact_id' => $this->contactId,
            ]);

            if ($contact) {
                $booking->guests()->firstOrCreate([
                    'email' => $contact->email,
                ], [
                    'name' => $contact->name ?? 'there',
                    'attendance_status' => GuestStatus::Pending->value,
                ]);
            }
        }, 2);
    }

    public function failed(Throwable $exception): void
    {
        logger()->error('Create recurring booking failed', [
            'email' => $this->occurrence['starts_at'],
            'reason' => $exception->getMessage(),
        ]);
    }
}
