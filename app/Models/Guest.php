<?php

namespace App\Models;

use App\GuestStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Guest extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'attendance_status', 'booking_id', 'user_id'];

    protected $casts = [
        'attendance_status' => GuestStatus::class,
    ];

    public function booking(): BelongsTo
    {
        return $this->belongsTo(Booking::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function rescheduleResponses(): HasMany
    {
        return $this->hasMany(RescheduleResponse::class);
    }
}
