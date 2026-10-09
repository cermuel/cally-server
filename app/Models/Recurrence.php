<?php

namespace App\Models;

use App\RecurrenceFrequency;
use App\RecurrenceStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Recurrence extends Model


{
    /** @use HasFactory<\Database\Factories\RecurrenceFactory> */
    use HasFactory;

    protected $fillable = ['user_id', 'event_id', 'frequency', 'interval', 'days_of_week', 'start_time', 'starts_on', 'ends_on', 'occurrence_count', 'status', 'generated_until', 'timezone'];

    protected $casts = [
        'frequency' => RecurrenceFrequency::class,
        'days_of_week' => 'array',
        'starts_on' => 'datetime',
        'ends_on' => 'datetime',
        'generated_until' => 'datetime',
        'status' => RecurrenceStatus::class
    ];

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
        return  $this->hasMany(Booking::class);
    }
}
