<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RecurrenceResource extends JsonResource
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
            'frequency' => $this->frequency->value,
            'interval' => $this->interval,
            'days_of_week' => $this->days_of_week,
            'start_time' => $this->start_time,
            'starts_on' => $this->starts_on?->toDateString(),
            'ends_on' => $this->ends_on?->toDateString(),
            'timezone' => $this->timezone,
            'status' => $this->status->value,
            'schedule_description' => $this->scheduleDescription(),
            'user' => new UserResource($this->whenLoaded('user')),
            'event' => $this->when(
                $this->relationLoaded('event') && $this->event !== null,
                fn(): array => [
                    'id' => $this->event->id,
                    'name' => $this->event->name,
                    'slug' => $this->event->slug,
                    'team_id' => $this->event->team_id,
                    'duration_minutes' => $this->event->duration_minutes,
                ],
            ),
            'bookings' => BookingDetailsResource::collection($this->whenLoaded('bookings')),
        ];
    }
}
