<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Booking extends Model
{
    /** @use HasFactory<BookingFactory> */
    use HasFactory;

    protected $fillable = ['user_id', 'contact_id', 'event_id', 'starts_at', 'ends_at', 'booking_timezone', 'status', 'provider_event_id', 'meeting_url', 'notes', 'cancellation_reason', 'cancelled_at'];

    public function scopeFilter(Builder $query, array $filters): Builder
    {

        return $query->when($filters['status'] ?? null, function ($query, $status) {
            if ($status == 'completed') {
                $query->where(function ($q) use ($status) {
                    $q->where('status', $status)->orWhere('ends_at', '<', now());
                });
            } elseif ($status == 'cancelled') {
                $query->where(function ($q) use ($status) {
                    $q->where('status', $status)->orWhereNotNull('cancelled_at');
                });
            } else {
                $query->where('status', $status);
            }
        })->when($filters['provider_id'] ?? null, function ($query, $provider_id) {
            $query->where('provider_event_id', $provider_id);
        })->when($filters['date'] ?? null, function ($query, $date) {
            $query->whereDate('starts_at', $date);
        })->when($filters['event_id'] ?? null, function ($query, $event) {
            $query->where('event_id', $event);
        });
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function contact(): BelongsTo
    {
        return $this->belongsTo(Contact::class);
    }

    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }

    public function guests(): HasMany
    {
        return $this->hasMany(Guest::class);
    }

    protected function casts(): array
    {
        return [
            'starts_at' => 'datetime',
            'ends_at' => 'datetime',
            'cancelled_at' => 'datetime',
        ];
    }
}
