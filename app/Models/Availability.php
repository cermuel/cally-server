<?php

namespace App\Models;

use Database\Factories\AvailabilityFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Availability extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'day', 'start_time', 'end_time'];

    /** @use HasFactory<AvailabilityFactory> */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
