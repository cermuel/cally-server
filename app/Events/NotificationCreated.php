<?php

namespace App\Events;

use App\Models\Notification;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Contracts\Events\ShouldDispatchAfterCommit;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NotificationCreated implements ShouldBroadcast, ShouldDispatchAfterCommit
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public function __construct(public Notification $notification) {}

    public function broadcastWith(): array
    {
        return [
            'notification' => [
                'id' => $this->notification->id,
                'type' => $this->notification->type,
                'title' => $this->notification->title,
                'message' => $this->notification->message,
                'action_url' => $this->notification->action_url,
                'data' => $this->notification->data,
                'read_at' => $this->notification->read_at,
                'created_at' => $this->notification->created_at,
            ],
        ];
    }

    public function broadcastAs(): string
    {
        return 'notification.created';
    }

    public function broadcastOn(): array
    {
        return [
            new PrivateChannel("users-{$this->notification->user_id}-notifications"),
        ];
    }
}
