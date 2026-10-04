<?php

namespace App\Support;

use App\Models\Booking;
use Carbon\CarbonImmutable;
use DateTimeInterface;

final class BookingTime
{
    public static function toUtc(string $value, string $timezone): CarbonImmutable
    {
        return CarbonImmutable::parse($value, $timezone)->utc();
    }

    /**
     * @param  array<string, mixed>  $data
     * @return array<string, mixed>
     */
    public static function normalizePayload(array $data, string $fallbackTimezone): array
    {
        $timezone = $data['timezone'] ?? $fallbackTimezone;
        $hasDateTime = array_key_exists('starts_at', $data) || array_key_exists('ends_at', $data);

        if (isset($data['starts_at'])) {
            $data['starts_at'] = self::toUtc($data['starts_at'], $timezone);
        }

        if (isset($data['ends_at'])) {
            $data['ends_at'] = self::toUtc($data['ends_at'], $timezone);
        }

        unset($data['date'], $data['timezone']);

        if ($hasDateTime) {
            $data['booking_timezone'] = $timezone;
        }

        return $data;
    }

    public static function timezone(Booking $booking): string
    {
        return $booking->booking_timezone
            ?? $booking->user?->timezone
            ?? 'UTC';
    }

    public static function formatForGuest(Booking $booking, ?DateTimeInterface $date): string
    {
        if ($date === null) {
            return '';
        }

        return CarbonImmutable::instance($date)
            ->timezone(self::timezone($booking))
            ->format('M j, Y g:i A T');
    }
}
