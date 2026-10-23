<?php

namespace App\Models;

use App\RecurrenceFrequency;
use App\RecurrenceStatus;
use Database\Factories\RecurrenceFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Recurrence extends Model
{
    /** @use HasFactory<RecurrenceFactory> */
    use HasFactory;

    protected $fillable = ['user_id', 'event_id', 'frequency', 'interval', 'days_of_week', 'start_time', 'starts_on', 'ends_on', 'occurrence_count', 'status', 'generated_until', 'timezone'];

    protected $casts = [
        'frequency' => RecurrenceFrequency::class,
        'days_of_week' => 'array',
        'starts_on' => 'datetime',
        'ends_on' => 'datetime',
        'generated_until' => 'datetime',
        'status' => RecurrenceStatus::class,
    ];

    public function scopeFilter(Builder $query, array $filters): Builder
    {
        return $query->when($filters['event_id'] ?? false, function ($query, $eventId) {
            $query->where('event_id', $eventId);
        });
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class, 'event_id');
    }

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }

    public function scheduleDescription(): string
    {
        $frequency = $this->frequency->value;
        $interval = (int) $this->interval;

        $unit = match ($frequency) {
            'daily' => $interval === 1 ? 'day' : 'days',
            'weekly' => $interval === 1 ? 'week' : 'weeks',
            'monthly' => $interval === 1 ? 'month' : 'months',
        };

        $description = $interval === 1
            ? "Every {$unit}"
            : "Every {$interval} {$unit}";

        if ($frequency === 'weekly') {
            $dayNames = [
                0 => 'Sunday',
                1 => 'Monday',
                2 => 'Tuesday',
                3 => 'Wednesday',
                4 => 'Thursday',
                5 => 'Friday',
                6 => 'Saturday',
            ];

            $days = collect($this->days_of_week)
                ->map(fn (int $day): string => $dayNames[$day])
                ->join(', ', ' and ');

            $description .= " on {$days}";
        }

        if ($this->ends_on !== null) {
            $description .= ' until '.$this->ends_on->format('j F Y');
        }

        return $description;
    }
}
