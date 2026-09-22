<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;

    protected $fillable = ['email', 'name', 'username', 'avatar_url', 'password'];

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
}
