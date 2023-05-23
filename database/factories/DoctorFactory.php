<?php

namespace Database\Factories;

use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $departments = Department::count();
        $department_id = fake()->numberBetween(1, $departments);
        return [
            'email' => fake()->email(),
            'password' => fake()->password(),
            'name' => fake()->name(),
            'department_id' => $department_id
        ];
    }
}
