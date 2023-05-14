<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Subject;
use Illuminate\Support\Facades\DB;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // $sql = 'insert into subjects (name, code, pre_requisite, files) values (?, ?, ?, ?)';
        $sql = 'insert into subjects (department_id, name, code, pre_requisite, files) values (1, ?, ?, ?, ?)';

        // DB::insert($sql, [ 'Computer Introduction' , 'CI111', 'General', null , json_encode([])]);
        // DB::insert($sql, [ 'Fundamentals of Programming' , 'FP111', 'General', 1, json_encode([])]);
        // DB::insert($sql, [ 'Semiconductors' , 'Sem111', 'General', null, json_encode([])]);
        // DB::insert($sql, [ 'Logic Design-1' , 'LD111', 'General', 3, json_encode([])]);
        // DB::insert($sql, [ 'Mathematics-1' , 'MA111', 'General', null, json_encode([])]);
        // DB::insert($sql, [ 'Discrete Mathematics' , 'DM111', 'General', null, json_encode([])]);
        // DB::insert($sql, [ 'Mathematics-2' , 'MA211', 'General', 5, json_encode([])]);
        // DB::insert($sql, [ 'Introduction to IS' , 'IIS111', 'General', null, json_encode([])]);
        // DB::insert($sql, [ 'Statistics&Probabilities' , 'SP111', 'General', 5, json_encode([])]);
        // DB::insert($sql, [ 'Programming-1' , 'PR111', 'General', 2, json_encode([])]);
        // DB::insert($sql, [ 'Computer Architecture' , 'CP111', 'General', 4, json_encode([])]);
        // DB::insert($sql, [ 'Quality' , 'QU111', 'General', null, json_encode([])]);
        // DB::insert($sql, [ 'Human Rights' , 'HR111', 'General', null, json_encode([])]);
        // DB::insert($sql, [ 'Professional Ethics' , 'PE111', 'General', null, json_encode([])]);
        // DB::insert($sql, [ 'Fundamental of Management' , 'FM111', 'General', null, json_encode([])]);
        // DB::insert($sql, [ 'Multimedia-1' , 'MU111', 'General', 10, json_encode([])]);
        // DB::insert($sql, [ 'Programming-2' , 'PR211', 'General', 10, json_encode([])]);
        // DB::insert($sql, [ 'Data Structure' , 'DS111', 'General', 10, json_encode([])]);
        // DB::insert($sql, [ 'Operating System-1' , 'OS111', 'General', 10, json_encode([])]);
        // DB::insert($sql, [ 'Web Design&Development' , 'WEB111', 'General', 10, json_encode([])]);
        // DB::insert($sql, [ 'System Anlysis&Design' , 'SAD111', 'General', 8, json_encode([])]);

        DB::insert($sql, [ 'Computer Introduction' , 'CI111', null , json_encode([])]);
        DB::insert($sql, [ 'Fundamentals of Programming' , 'FP111', 1, json_encode([])]);
        DB::insert($sql, [ 'Semiconductors' , 'Sem111', null, json_encode([])]);
        DB::insert($sql, [ 'Logic Design-1' , 'LD111', 3, json_encode([])]);
        DB::insert($sql, [ 'Mathematics-1' , 'MA111', null, json_encode([])]);
        DB::insert($sql, [ 'Discrete Mathematics' , 'DM111', null, json_encode([])]);
        DB::insert($sql, [ 'Mathematics-2' , 'MA211', 5, json_encode([])]);
        DB::insert($sql, [ 'Introduction to IS' , 'IIS111', null, json_encode([])]);
        DB::insert($sql, [ 'Statistics&Probabilities' , 'SP111', 5, json_encode([])]);
        DB::insert($sql, [ 'Programming-1' , 'PR111', 2, json_encode([])]);
        DB::insert($sql, [ 'Computer Architecture' , 'CP111', 4, json_encode([])]);
        DB::insert($sql, [ 'Quality' , 'QU111', null, json_encode([])]);
        DB::insert($sql, [ 'Human Rights' , 'HR111', null, json_encode([])]);
        DB::insert($sql, [ 'Professional Ethics' , 'PE111', null, json_encode([])]);
        DB::insert($sql, [ 'Fundamental of Management' , 'FM111', null, json_encode([])]);
        DB::insert($sql, [ 'Multimedia-1' , 'MU111', 10, json_encode([])]);
        DB::insert($sql, [ 'Programming-2' , 'PR211', 10, json_encode([])]);
        DB::insert($sql, [ 'Data Structure' , 'DS111', 10, json_encode([])]);
        DB::insert($sql, [ 'Operating System-1' , 'OS111', 10, json_encode([])]);
        DB::insert($sql, [ 'Web Design&Development' , 'WEB111', 10, json_encode([])]);
        DB::insert($sql, [ 'System Anlysis&Design' , 'SAD111', 8, json_encode([])]);


    }
}
