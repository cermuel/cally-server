<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasApiTokens, HasFactory;

    protected $fillable = ['email', 'notification_preference', 'name', 'username', 'avatar_url', 'password', 'reset_password_token', 'reset_password_token_expires_at', 'onboarding_completed_at', 'email_verified_at', 'email_token', 'email_token_expires_at', 'description', 'timezone'];

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

    public function automations()
    {
        return $this->hasMany(Automation::class);
    }

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }

    public function imports(): HasMany
    {
        return $this->hasMany(Import::class);
    }

    public function notifications(): HasMany
    {
        return $this->hasMany(Notification::class);
    }

    public function notificationPreferences(): array
    {
        $defaults = [
            'booking_created' => [
                'in_app' => true,
                'email' => true,
            ],

            'booking_cancelled' => [
                'in_app' => true,
                'email' => true,
            ],

            'booking_rescheduled' => [
                'in_app' => true,
                'email' => true,
            ],

            'guest_added' => [
                'in_app' => true,
                'email' => false,
            ],
        ];

        return array_replace_recursive(
            $defaults,
            $this->notification_preference ?? []
        );
    }

    protected function casts(): array
    {
        return [
            'email_token_expires_at' => 'datetime',
            'reset_password_token_expires_at' => 'datetime',
            'email_verified_at' => 'datetime',
            'notification_preference' => 'array',
        ];
    }
}
