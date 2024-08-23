<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Crops>
 */
class CropsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        //
        return [
            'cropName' => fake()->name(),
            'botanicalName' => fake()->name(),
            'pH' => rand(1, 10),
            'nitrogen' => rand(1, 100),
            'phosphorus' => rand(1, 100),
            'potassium' => rand(1, 100),
        ];
    }
}
