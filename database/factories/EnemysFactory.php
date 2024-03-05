<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Enemys>
 */
class EnemysFactory extends Factory
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
            'type' => fake()->text(),
            'health' => fake()->numberBetween(1, 10000),
            'damage' => fake()->numberBetween(0.5, 1),
        ];
    }
}
