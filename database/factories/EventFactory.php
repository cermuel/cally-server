<?php

namespace Database\Factories;

use App\Models\Event;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'name' => '30 min meeting',
            'slug' => Str::slug(fake()->unique()->words(3, true)),
            'description' => fake()->sentence(),
            'is_active' => true,
            'visibility' => 'public',
            'status' => 'published',
            'is_profile' => true,
            'duration_minutes' => 30,
            'pre_meeting_minutes' => 0,
            'post_meeting_minutes' => 0,
        ];
    }
}
