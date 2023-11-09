<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ipad>
 */
class IpadFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => fake()->numberBetween(1, 100),
            'serial_number' => fake()->ean8(),
            'model' => fake()->word(),
            'isAvailable' => fake()->boolean(0.7),
        ];
    }
}
