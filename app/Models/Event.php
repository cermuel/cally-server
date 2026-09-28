<?php

namespace App\Models;

use Database\Factories\EventFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    /** @use HasFactory<EventFactory> */
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'slug', 'user_id', 'color', 'description', 'is_active', 'visibility', 'is_profile', 'first_reminder', 'second_reminder', 'duration_minutes', 'pre_meeting_minutes', 'post_meeting_minutes', 'max_meetings_daily', 'status'];

    public function scopeFilter(Builder $query, array $filters)
    {

        if ($filters['search'] ?? false) {
            $search = $filters['search'];
            $query->where('name', 'ilike', '%'.$search.'%')
                ->orWhere('slug', 'ilike', '%'.$search.'%')
                ->orWhere('description', 'ilike', '%'.$search.'%');
        }
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }

    public function guests(): HasManyThrough
    {
        return $this->hasManyThrough(Guest::class, Booking::class);
    }
}
