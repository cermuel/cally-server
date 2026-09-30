<?php

namespace App\Models;

use App\GuestStatus;
use Database\Factories\GuestFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $fillable = ['name', 'email', 'attendance_status', 'booking_id'];

    /** @use HasFactory<GuestFactory> */
    use HasFactory;

    protected $casts = [
        'attendance_status' => GuestStatus::class,
    ];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
