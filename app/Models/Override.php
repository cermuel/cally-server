<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Override extends Model
{
    /** @use HasFactory<\Database\Factories\OverrideFactory> */
    protected $fillable = ['start_time', 'end_time', 'date', 'user_id'];

    use HasFactory;

    public function user()
    {
        return   $this->belongsTo(User::class);
    }
}
