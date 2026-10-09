<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TeamInviteResource extends JsonResource
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
            'email' => $this->email,
            'team_id' => $this->team_id,
            'expires_at' => $this->expires_at,
            'accepted_at' => $this->accepted_at,
            'declined_at' => $this->declined_at,
            'role' => $this->role,
            'team' => new TeamResource($this->whenLoaded('team'))
        ];
    }
}
