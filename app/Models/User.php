<?php

namespace App\Models;

use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasApiTokens, HasFactory;

    protected $fillable = ['email', 'name', 'username', 'avatar_url', 'password', 'reset_password_token', 'reset_password_token_expires_at', 'onboarding_completed_at', 'email_verified_at', 'email_token', 'email_token_expires_at'];

    public function events()
    {
        return $this->hasMany(Event::class);
    }

    public function overrides()
    {
        return $this->hasMany(Override::class);
    }

    public function availabilities()
    {
        return $this->hasMany(Availability::class);
    }

    public function connections()
    {
        return $this->hasMany(Connection::class);
    }

    protected function casts(): array
    {
        return [
            'email_token_expires_at' => 'datetime',
            'reset_password_token_expires_at' => 'datetime',
            'email_verified_at' => 'datetime',
        ];
    }
}
