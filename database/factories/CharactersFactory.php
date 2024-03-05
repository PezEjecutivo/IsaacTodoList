<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Characters>
 */
class CharactersFactory extends Factory
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
            'health' => fake()->numberBetween(-1, 4),
            'damage' => fake()->numberBetween(1, 4),
            'speed' => fake()->numberBetween(1, 3),
        ];
    }
}
