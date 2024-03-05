<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Challenges>
 */
class ChallengesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->name(),
            'description' => fake()->text(),
            'playable_character' => fake()->numberBetween(1, 10),
            'final_enemy' => fake()->numberBetween(1, 10),
        ];
    }
}
