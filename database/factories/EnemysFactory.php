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
            'type' => fake()->randomElement(["Normal", "Mini-Boss", "Boss"]),
            'health' => fake()->numberBetween(1, 10000),
            'damage' => fake()->numberBetween(1, 2),
        ];
    }
}
