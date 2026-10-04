<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AutomationResource extends JsonResource
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
            'trigger' => $this->trigger,
            'color' => $this->color,
            'is_active' => $this->is_active,
            'action' => $this->action,
            'payload' => $this->payload,
            'user' => new UserResource($this->whenLoaded('user')),
        ];
    }
}
