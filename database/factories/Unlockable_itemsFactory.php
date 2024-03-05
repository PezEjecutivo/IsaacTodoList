<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Unlockable_items>
 */
class Unlockable_itemsFactory extends Factory
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
            'effect' => fake()->text(),
            'enemy_method_id' => fake()->numberBetween(1, 10),
            'challenge_method_id' => fake()->numberBetween(1, 10),
        ];
    }
}
