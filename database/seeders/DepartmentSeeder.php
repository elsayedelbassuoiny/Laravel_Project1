<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Subject;
use Illuminate\Support\Facades\DB;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Department::create(['name' => 'Computer Science', 'code' => 'CS']);
        Department::create(['name' => 'Computer Information Technology', 'code' => 'IT']);
        Department::create(['name' => 'Information Systems', 'code' => 'IS']);

    }
}
