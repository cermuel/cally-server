<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{

    protected $fillable = ["name", 'email', 'attendace_status', 'booking_id'];
    /** @use HasFactory<\Database\Factories\GuestFactory> */
    use HasFactory;

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
