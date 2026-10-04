<?php

namespace App\Http\Resources;

use App\Models\Booking;
use App\Models\Guest;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Booking */
class BookingDetailsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'user_id' => $this->user_id,
            'event_id' => $this->event_id,
            'starts_at' => $this->starts_at?->toISOString(),
            'ends_at' => $this->ends_at?->toISOString(),
            'booking_timezone' => $this->booking_timezone,
            'status' => $this->status,
            'provider_event_id' => $this->provider_event_id,
            'meeting_url' => $this->meeting_url,
            'provider' => $this->provider,
            'notes' => $this->notes,
            'cancellation_reason' => $this->cancellation_reason,
            'cancelled_at' => $this->cancelled_at?->toISOString(),
            'created_at' => $this->created_at->toISOString(),
            'updated_at' => $this->updated_at->toISOString(),
            'event' => $this->when(
                $this->relationLoaded('event') && $this->event !== null,
                fn (): array => [
                    'id' => $this->event->id,
                    'name' => $this->event->name,
                    'slug' => $this->event->slug,
                    'duration_minutes' => $this->event->duration_minutes,
                ],
            ),
            'host' => $this->when(
                $this->relationLoaded('user') && $this->user !== null,
                fn (): array => [
                    'name' => $this->user->name,
                    'email' => $this->user->email,
                    'avatar' => $this->user->avatar_url,
                    'timezone' => $this->user->timezone,
                ],
            ),
            'guests' => $this->whenLoaded(
                'guests',
                fn () => $this->guests
                    ->map(fn (Guest $guest): array => [
                        'id' => $guest->id,
                        'booking_id' => $guest->booking_id,
                        'name' => $guest->name,
                        'email' => $guest->email,
                        'attendance_status' => $guest->attendance_status,
                        'created_at' => $guest->created_at->toISOString(),
                        'updated_at' => $guest->updated_at->toISOString(),
                    ])
                    ->values(),
            ),
        ];
    }
}
