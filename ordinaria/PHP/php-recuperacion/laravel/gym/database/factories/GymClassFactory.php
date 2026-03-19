<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Trainer;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GymClass>
 */
class GymClassFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->word() . ' class',
            'descripcion' => fake()->sentence(),
            'cupo_maximo' => fake()->numberBetween(10, 30),
            'trainer_id' => Trainer::factory(),
        ];
    }
}
