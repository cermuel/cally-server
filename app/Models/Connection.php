<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Connection extends Model
{
    protected $casts = [
        'access_token' => 'encrypted',
        'refresh_token' => 'encrypted',
        'token_expires_at' => 'datetime',
    ];
    protected $fillable = ['user_id', 'provider', 'provider_account_id', 'email', 'access_token', 'refresh_token', 'token_expires_at', 'calendar_id'];
    /** @use HasFactory<\Database\Factories\ConnectionFactory> */
    use HasFactory;

    public function user()
    {
        return   $this->belongsTo(User::class);
    }
}
