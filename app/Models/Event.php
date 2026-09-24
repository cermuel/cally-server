<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['name', 'slug', 'user_id', 'color', 'description', 'is_active', 'visibility', 'first_reminder', 'second_reminder', 'duration_minutes', 'pre_meeting_minutes', 'post_meeting_minutes', 'max_meetings_daily', 'status'];
    /** @use HasFactory<\Database\Factories\EventFactory> */
    use HasFactory;

    public function user()
    {
        return  $this->belongsTo(User::class);
    }

    public function guests()
    {
        return  $this->belongsTo(Guest::class);
    }
}
