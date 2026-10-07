<?php

namespace App\Models;

use Database\Factories\NotificationFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Notification extends Model
{
    /** @use HasFactory<NotificationFactory> */
    use HasFactory;

    protected $fillable = ['user_id', 'type', 'title', 'message', 'action_url', 'read_at', 'data'];

    protected $casts = ['data' => 'array', 'read_at' => 'datetime'];

    public function scopeFilter(Builder $query, array $filters): Builder
    {
        if (array_key_exists('is_read', $filters)) {
            $isRead = (bool) $filters['is_read'];

            if ($isRead) {
                $query->whereNotNull('read_at');
            } else {
                $query->whereNull('read_at');
            }
        }

        return $query->when($filters['type'] ?? null, function ($query, $type) {
            $query->where('type', $type);
        });
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
