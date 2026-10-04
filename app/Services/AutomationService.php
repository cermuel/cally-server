<?php

namespace App\Services;

use App\AutomationAction;
use App\AutomationTrigger;
use App\BookingStatus;
use App\Jobs\CompleteMeetingJob;
use App\Jobs\SendAutomationEmailJob;
use App\Jobs\UpdateGoogleMeetGuestsJob;
use App\Models\Automation;
use App\Models\Booking;
use App\Models\Event;
use App\Models\User;
use App\Support\BookingTime;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Bus;

class AutomationService
{
    public function run(AutomationTrigger $trigger, ?Booking $booking = null, ?Event $event = null)
    {

        if (! $booking && ! $event) {
            return;
        }

        $userId = $booking?->user_id ?? $event?->user_id;

        $automations = Automation::where('user_id', $userId)
            ->where('trigger', $trigger->value)
            ->where('is_active', true)
            ->get();

        if ($booking ?? false) {
            $this->handleBookings($booking, $automations);
        }

        if ($event ?? false) {
            $this->handleEvents($event, $automations);
        }
    }

    protected function handleBookings(Booking $booking, Collection $automations)
    {
        $user = User::where('id', $booking->user_id)->firstOrFail();

        foreach ($automations as $automation) {
            match ($automation->action) {
                AutomationAction::AutoAcceptBooking => $this->autoAcceptBooking($booking, $user),

                AutomationAction::SendEmail => $this->sendEmail($booking, $automation),

                AutomationAction::AddToContact => null,
            };
        }
    }

    protected function handleEvents(Event $event, Collection $automations) {}

    protected function autoAcceptBooking(Booking $booking, User $user): void
    {
        if ($booking->status === BookingStatus::Confirmed) {
            return;
        }

        $booking->update([
            'status' => BookingStatus::Confirmed,
        ]);

        UpdateGoogleMeetGuestsJob::dispatch(
            $booking->id,
            true,
            $user->email,
            $user->name
        )->onQueue('meeting');
        CompleteMeetingJob::dispatch($booking->id)->onQueue('meeting')->delay($booking->ends_at);
    }

    protected function sendEmail(Booking $booking, Automation $automation): void
    {
        $booking->loadMissing(['guests']);

        $jobs = $booking->guests->filter(function ($guest) use ($automation) {
            if ($automation->payload['guestType'] ?? false) {
                return $guest->attendance_status == $automation->payload['guestType'];
            }

            return $guest;
        })->map(function ($guest) use ($booking, $automation) {
            return new SendAutomationEmailJob(
                $automation->id,
                $booking->id,
                $guest->email,
            );
        })->toArray();

        if (empty($jobs)) {
            return;
        }
        Bus::batch($jobs)->name('automation-email')->onQueue('automation-email')->dispatch();
    }

    public function handleEmailString(string $template, string $email, Booking $booking): string
    {
        $booking->loadMissing(['event', 'guests', 'user']);

        $guest = $booking->guests()->where('email', $email)->first();

        $variables = [
            '{{host_name}}' => $booking->user?->name,
            '{{host_email}}' => $booking->user?->email,

            '{{event_name}}' => $booking->event?->name,

            '{{guest_name}}' => $guest?->name ?? 'there',
            '{{guest_email}}' => $guest?->email,

            '{{starts_at}}' => BookingTime::formatForGuest($booking, $booking->starts_at),
            '{{ends_at}}' => BookingTime::formatForGuest($booking, $booking->ends_at),

            '{{booking_status}}' => $booking->status?->value ?? $booking->status,
        ];

        return strtr($template, $variables);
    }
}
