<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'email' => fake()->email(),
            'password' => fake()->password(),
            'name' => fake()->name(),
            'level' => fake()->numberBetween(1, 4),
            'assign_subjects' => json_encode([])
        ];
    }
}
