<?php

namespace App\Models;

use App\RescheduleStatus;
use Database\Factories\RescheduleFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Reschedule extends Model
{
    /** @use HasFactory<RescheduleFactory> */
    use HasFactory;

    protected $fillable = ['booking_id', 'status', 'starts_at', 'ends_at'];

    protected $casts = [
        'status' => RescheduleStatus::class,
        'starts_at' => 'datetime',
        'ends_at' => 'datetime',
    ];

    public function booking(): BelongsTo
    {
        return $this->belongsTo(Booking::class);
    }

    public function responses(): HasMany
    {
        return $this->hasMany(RescheduleResponse::class);
    }
}
