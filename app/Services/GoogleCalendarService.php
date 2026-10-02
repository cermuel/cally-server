<?php

namespace App\Services;

use App\Models\Booking;
use App\Models\Connection;
use Google\Client as GoogleClient;
use Google\Service\Calendar;
use Google\Service\Calendar\Event;
use Google\Service\Calendar\EventAttendee;
use Google\Service\Calendar\EventDateTime;
use Google\Service\Calendar\ConferenceData;
use Google\Service\Calendar\CreateConferenceRequest;
use Google\Service\Calendar\ConferenceSolutionKey;
use Illuminate\Support\Str;

class GoogleCalendarService
{
    public function createBookingEvent(Booking $booking, array $guests = []): Event
    {
        $calendar = $this->calendar($booking);
        $connection = $this->connection($booking);

        $event = new Event([
            'summary' => $booking->event->name,
            'description' => $booking->event->description,
            'start' => new EventDateTime([
                'dateTime' => $booking->starts_at->toRfc3339String(),
                'timeZone' => $booking->user->timezone,
            ]),
            'end' => new EventDateTime([
                'dateTime' => $booking->ends_at->toRfc3339String(),
                'timeZone' => $booking->user->timezone,
            ]),
            'attendees' => $this->attendees($guests),
            'conferenceData' => new ConferenceData([
                'createRequest' => new CreateConferenceRequest([
                    'requestId' => (string) Str::uuid(),
                    'conferenceSolutionKey' => new ConferenceSolutionKey([
                        'type' => 'hangoutsMeet',
                    ]),
                ]),
            ]),
        ]);

        return $calendar->events->insert(
            $connection->calendar_id ?? 'primary',
            $event,
            [
                'conferenceDataVersion' => 1,
                'sendUpdates' => 'all',
            ]
        );
    }

    public function addGuests(Booking $booking, array $guests): Event
    {
        $calendar = $this->calendar($booking);
        $connection = $this->connection($booking);

        $event = $calendar->events->get(
            $connection->calendar_id ?? 'primary',
            $booking->provider_event_id
        );

        $currentAttendees = $event->getAttendees() ?? [];

        $mergedAttendees = array_merge(
            $currentAttendees,
            $this->attendees($guests)
        );

        $event->setAttendees($this->uniqueAttendees($mergedAttendees));

        return $calendar->events->update(
            $connection->calendar_id ?? 'primary',
            $booking->provider_event_id,
            $event,
            [
                'conferenceDataVersion' => 1,
                'sendUpdates' => 'all',
            ]
        );
    }

    public function removeGuests(Booking $booking, array $emails): Event
    {
        $calendar = $this->calendar($booking);
        $connection = $this->connection($booking);

        $event = $calendar->events->get(
            $connection->calendar_id ?? 'primary',
            $booking->provider_event_id
        );

        $removeEmails = collect($emails)
            ->map(fn($email) => strtolower($email))
            ->all();

        $remainingAttendees = collect($event->getAttendees() ?? [])
            ->reject(function (EventAttendee $attendee) use ($removeEmails) {
                return in_array(strtolower($attendee->getEmail()), $removeEmails, true);
            })
            ->values()
            ->all();

        $event->setAttendees($remainingAttendees);

        return $calendar->events->update(
            $connection->calendar_id ?? 'primary',
            $booking->provider_event_id,
            $event,
            [
                'conferenceDataVersion' => 1,
                'sendUpdates' => 'all',
            ]
        );
    }

    public function updateBookingEvent(Booking $booking, array $data): Event
    {
        $calendar = $this->calendar($booking);
        $connection = $this->connection($booking);

        $event = $calendar->events->get(
            $connection->calendar_id ?? 'primary',
            $booking->provider_event_id
        );



        if (isset($data['starts_at'])) {
            $event->setStart(new EventDateTime([
                'dateTime' => $data['starts_at']->toRfc3339String(),
                'timeZone' => $booking->user->timezone,
            ]));
        }

        if (isset($data['ends_at'])) {
            $event->setEnd(new EventDateTime([
                'dateTime' => $data['ends_at']->toRfc3339String(),
                'timeZone' => $booking->user->timezone,
            ]));
        }

        return $calendar->events->update(
            $connection->calendar_id ?? 'primary',
            $booking->provider_event_id,
            $event,
            [
                'conferenceDataVersion' => 1,
                'sendUpdates' => 'all',
            ]
        );
    }

    public function cancelBookingEvent(Booking $booking): void
    {
        if (! $booking->provider_event_id) {
            return;
        }

        $calendar = $this->calendar($booking);
        $connection = $this->connection($booking);

        $calendar->events->delete(
            $connection->calendar_id ?? 'primary',
            $booking->provider_event_id,
            [
                'sendUpdates' => 'all',
            ]
        );
    }

    private function attendees(array $guests): array
    {
        return collect($guests)
            ->map(function (array $guest) {
                return new EventAttendee(array_filter([
                    'email' => $guest['email'],
                    'displayName' => $guest['name'] ?? null,
                ]));
            })
            ->values()
            ->all();
    }

    private function uniqueAttendees(array $attendees): array
    {
        return collect($attendees)
            ->keyBy(fn(EventAttendee $attendee) => strtolower($attendee->getEmail()))
            ->values()
            ->all();
    }

    private function calendar(Booking $booking): Calendar
    {
        return new Calendar($this->client($this->connection($booking)));
    }

    private function connection(Booking $booking): Connection
    {
        return Connection::where('user_id', $booking->user_id)
            ->where('provider', 'google')
            ->firstOrFail();
    }

    private function client(Connection $connection): GoogleClient
    {
        $client = new GoogleClient();

        $client->setClientId(config('services.google.client_id'));
        $client->setClientSecret(config('services.google.client_secret'));

        $client->setAccessToken([
            'access_token' => $connection->access_token,
            'refresh_token' => $connection->refresh_token,
        ]);

        if ($client->isAccessTokenExpired() && $connection->refresh_token) {
            $newToken = $client->fetchAccessTokenWithRefreshToken($connection->refresh_token);

            $connection->update([
                'access_token' => $newToken['access_token'],
                'token_expires_at' => now()->addSeconds($newToken['expires_in']),
            ]);

            $client->setAccessToken([
                'access_token' => $connection->access_token,
                'refresh_token' => $connection->refresh_token,
            ]);
        }

        return $client;
    }
}
