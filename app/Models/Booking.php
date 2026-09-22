<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['user_id', 'event_id', 'starts_at', 'ends_at', 'status', 'provider_event_id', 'meeting_url', 'notes', 'cancellation_reason', 'cancelled_at'];
    /** @use HasFactory<\Database\Factories\BookingFactory> */
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
    public function guests()
    {
        return $this->hasMany(Guest::class);
    }
}
