<?php

use App\Models\User;
use Illuminate\Support\Facades\Broadcast;

Broadcast::channel(
    'users-{userId}-notifications',
    fn (User $user, int $userId): bool => $user->id === $userId,
    ['guards' => ['sanctum']],
);
