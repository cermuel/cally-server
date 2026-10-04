<?php

namespace Database\Factories;

use App\AutomationAction;
use App\AutomationTrigger;
use App\Models\Automation;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Automation>
 */
class AutomationFactory extends Factory
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
            'name' => fake()->words(3, true),
            'color' => fake()->hexColor(),
            'trigger' => AutomationTrigger::BookingEnded,
            'action' => AutomationAction::SendEmail,
            'payload' => [
                'subject' => fake()->sentence(),
                'body' => fake()->paragraph(),
            ],
        ];
    }
}
