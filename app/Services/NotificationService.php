<?php

namespace App\Services;

use App\Events\NotificationCreated;
use App\Jobs\SendNotificationEmailJob;
use App\Models\Notification;
use App\Models\User;

class NotificationService
{
    public function send(
        User $user,
        string $type,
        string $title,
        ?string $message = null,
        ?string $actionUrl = null,
        array $data = []
    ): ?Notification {
        $preferences = $user->notificationPreferences();
        $preferenceKey = str_replace('.', '_', $type);
        $notification = null;

        if ($preferences[$preferenceKey]['in_app'] ?? true) {
            $notification = $user->notifications()->create([
                'type' => $type,
                'title' => $title,
                'message' => $message,
                'action_url' => $actionUrl,
                'data' => $data,
            ]);
            broadcast(new NotificationCreated($notification));
        }

        if ($preferences[$preferenceKey]['email'] ?? false) {
            SendNotificationEmailJob::dispatch(
                email: $user->email,
                name: $user->name,
                title: $title,
                message: $message,
                actionUrl: $actionUrl,
            )->onQueue('notifications');
        }

        return $notification;
    }
}
