<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ContactResource extends JsonResource
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
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'timezone' => $this->timezone,
            'company' => $this->company,
            'tag' => $this->tag,
            'user_id' => $this->user_id,
            'platform_user_id' => $this->platform_user_id,
            'notes' => $this->notes,
            'bookings_count' => $this->bookings_count,
            'last_booked_at' => $this->last_booked_at,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'platformUser' => new UserResource($this->whenLoaded('platformUser')),
            'owner' => new UserResource($this->whenLoaded('owner')),
        ];
    }
}
