<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends Factory<User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'email' => fake()->unique()->safeEmail(),
            'name' => fake()->name(),
            'username' => fake()->unique()->userName(),
            'timezone' => 'UTC',
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
            'email_token' => Str::random(32),
            'email_token_expires_at' => now()->addMinutes(15),
        ];
    }
}
