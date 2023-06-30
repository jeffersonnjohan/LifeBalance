<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkoutDaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i <6; $i++){
            DB::table('workout_days')->insert([
                'workout_id' => 1
            ]);
        }
        for($i = 0; $i <14; $i++){
            DB::table('workout_days')->insert([
                'workout_id' => 2
            ]);
        }
        for($i = 0; $i <10; $i++){
            DB::table('workout_days')->insert([
                'workout_id' => 3
            ]);
        }
    }
}
