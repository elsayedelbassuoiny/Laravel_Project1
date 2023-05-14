<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Factories\StudentFactory;

use App\Models\Student;


class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::create([
            'name' => 'sayed',
            'email' => 'sayed@fci.com',
            'password' => 'sayed',
            'level' => 3,
            'assign_subjects' => '[]',
        ]);

        Student::factory()->count(20)->create();
    }
}
