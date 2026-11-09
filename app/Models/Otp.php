<?php

namespace App\Models;

use Database\Factories\OtpFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Otp extends Model
{
    /** @use HasFactory<OtpFactory> */
    use HasFactory;

    protected $fillable = ['code', 'challenge_id', 'expires_at', 'attempts', 'purpose'];

    protected $casts = ['expires_at' => 'datetime'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
