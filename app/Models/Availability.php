<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Availability extends Model
{
    protected $fillable = ['user_id', 'day', 'start_time', 'end_time'];
    /** @use HasFactory<\Database\Factories\AvailabilityFactory> */
    use HasFactory;

    public function user()
    {
        return  $this->belongsTo(User::class);
    }
}
