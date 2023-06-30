<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkoutDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('workout_details')->insert([
            'workout_day_id' => 1,
            'workout_activity_id' => 16,
            'repetition' => 4,
            'calories' => 25,
            'duration' => 120,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 1,
            'workout_activity_id' => 17,
            'repetition' => 4,
            'calories' => 30,
            'duration' => 120,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 1,
            'workout_activity_id' => 18,
            'repetition' => 4,
            'calories' => 25,
            'duration' => 120,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 1,
            'workout_activity_id' => 19,
            'repetition' => 2,
            'calories' => 50,
            'duration' => 100,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 1,
            'workout_activity_id' => 20,
            'repetition' => 2,
            'calories' => 35,
            'duration' => 100,
        ]);

        DB::table('workout_details')->insert([
            'workout_day_id' => 2,
            'workout_activity_id' => 21,
            'repetition' => 2,
            'calories' => 40,
            'duration' => 100,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 2,
            'workout_activity_id' => 22,
            'repetition' => 2,
            'calories' => 35,
            'duration' => 100,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 2,
            'workout_activity_id' => 23,
            'repetition' => 2,
            'calories' => 45,
            'duration' => 100,
        ]);

        DB::table('workout_details')->insert([
            'workout_day_id' => 3,
            'workout_activity_id' => 24,
            'repetition' => 2,
            'calories' => 45,
            'duration' => 100,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 3,
            'workout_activity_id' => 25,
            'repetition' => 2,
            'calories' => 40,
            'duration' => 100,
        ]);

        DB::table('workout_details')->insert([
            'workout_day_id' => 4,
            'workout_activity_id' => 26,
            'repetition' => 2,
            'calories' => 35,
            'duration' => 100,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 4,
            'workout_activity_id' => 27,
            'repetition' => 2,
            'calories' => 40,
            'duration' => 100,
        ]);

        DB::table('workout_details')->insert([
            'workout_day_id' => 5,
            'workout_activity_id' => 1,
            'repetition' => 4,
            'calories' => 20,
            'duration' => 120,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 5,
            'workout_activity_id' => 2,
            'repetition' => 4,
            'calories' => 15,
            'duration' => 120,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 5,
            'workout_activity_id' => 28,
            'repetition' => 1,
            'calories' => 30,
            'duration' => 45,
        ]);

        DB::table('workout_details')->insert([
            'workout_day_id' => 6,
            'workout_activity_id' => 14,
            'repetition' => 2,
            'calories' => 10,
            'duration' => 60,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 6,
            'workout_activity_id' => 15,
            'repetition' => 4,
            'calories' => 20,
            'duration' => 120,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 6,
            'workout_activity_id' => 16,
            'repetition' => 4,
            'calories' => 20,
            'duration' => 120,
        ]);



        DB::table('workout_details')->insert([
            'workout_day_id' => 7,
            'workout_activity_id' => 4,
            'repetition' => 4,
            'calories' => 30,
            'duration' => 120,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 7,
            'workout_activity_id' => 5,
            'repetition' => 4,
            'calories' => 20,
            'duration' => 120,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 7,
            'workout_activity_id' => 6,
            'repetition' => 4,
            'calories' => 30,
            'duration' => 120,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 7,
            'workout_activity_id' => 7,
            'repetition' => 4,
            'calories' => 20,
            'duration' => 120,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 7,
            'workout_activity_id' => 3,
            'repetition' => 4,
            'calories' => 20,
            'duration' => 120,
        ]);

        DB::table('workout_details')->insert([
            'workout_day_id' => 8,
            'workout_activity_id' => 4,
            'repetition' => 4,
            'calories' => 30,
            'duration' => 120,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 8,
            'workout_activity_id' => 6,
            'repetition' => 4,
            'calories' => 30,
            'duration' => 120,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 8,
            'workout_activity_id' => 8,
            'repetition' => 2,
            'calories' => 25,
            'duration' => 100,
        ]);

        DB::table('workout_details')->insert([
            'workout_day_id' => 9,
            'workout_activity_id' => 1,
            'repetition' => 4,
            'calories' => 20,
            'duration' => 120,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 9,
            'workout_activity_id' => 2,
            'repetition' => 4,
            'calories' => 15,
            'duration' => 120,
        ]);

        DB::table('workout_details')->insert([
            'workout_day_id' => 10,
            'workout_activity_id' => 14,
            'repetition' => 2,
            'calories' => 10,
            'duration' => 60,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 10,
            'workout_activity_id' => 15,
            'repetition' => 4,
            'calories' => 20,
            'duration' => 120,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 10,
            'workout_activity_id' => 16,
            'repetition' => 4,
            'calories' => 20,
            'duration' => 120,
        ]);

        DB::table('workout_details')->insert([
            'workout_day_id' => 11,
            'workout_activity_id' => 20,
            'repetition' => 2,
            'calories' => 35,
            'duration' => 100,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 11,
            'workout_activity_id' => 21,
            'repetition' => 2,
            'calories' => 40,
            'duration' => 100,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 11,
            'workout_activity_id' => 22,
            'repetition' => 2,
            'calories' => 35,
            'duration' => 100,
        ]);

        DB::table('workout_details')->insert([
            'workout_day_id' => 12,
            'workout_activity_id' => 15,
            'repetition' => 4,
            'calories' => 20,
            'duration' => 120,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 12,
            'workout_activity_id' => 16,
            'repetition' => 4,
            'calories' => 20,
            'duration' => 120,
        ]);

        DB::table('workout_details')->insert([
            'workout_day_id' => 13,
            'workout_activity_id' => 23,
            'repetition' => 2,
            'calories' => 45,
            'duration' => 100,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 13,
            'workout_activity_id' => 27,
            'repetition' => 2,
            'calories' => 80,
            'duration' => 100,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 13,
            'workout_activity_id' => 28,
            'repetition' => 2,
            'calories' => 50,
            'duration' => 100,
        ]);

        DB::table('workout_details')->insert([
            'workout_day_id' => 14,
            'workout_activity_id' => 3,
            'repetition' => 4,
            'calories' => 25,
            'duration' => 120,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 14,
            'workout_activity_id' => 5,
            'repetition' => 4,
            'calories' => 20,
            'duration' => 120,
        ]);

        DB::table('workout_details')->insert([
            'workout_day_id' => 15,
            'workout_activity_id' => 9,
            'repetition' => 4,
            'calories' => 30,
            'duration' => 120,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 15,
            'workout_activity_id' => 10,
            'repetition' => 4,
            'calories' => 30,
            'duration' => 120,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 15,
            'workout_activity_id' => 11,
            'repetition' => 4,
            'calories' => 20,
            'duration' => 120,
        ]);

        DB::table('workout_details')->insert([
            'workout_day_id' => 16,
            'workout_activity_id' => 26,
            'repetition' => 2,
            'calories' => 35,
            'duration' => 100,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 16,
            'workout_activity_id' => 27,
            'repetition' => 2,
            'calories' => 40,
            'duration' => 100,
        ]);

        DB::table('workout_details')->insert([
            'workout_day_id' => 17,
            'workout_activity_id' => 1,
            'repetition' => 4,
            'calories' => 20,
            'duration' => 120,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 17,
            'workout_activity_id' => 2,
            'repetition' => 4,
            'calories' => 15,
            'duration' => 120,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 17,
            'workout_activity_id' => 28,
            'repetition' => 1,
            'calories' => 30,
            'duration' => 120,
        ]);

        DB::table('workout_details')->insert([
            'workout_day_id' => 18,
            'workout_activity_id' => 25,
            'repetition' => 1,
            'calories' => 45,
            'duration' => 45,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 18,
            'workout_activity_id' => 24,
            'repetition' => 2,
            'calories' => 80,
            'duration' => 100,
        ]);

        DB::table('workout_details')->insert([
            'workout_day_id' => 19,
            'workout_activity_id' => 1,
            'repetition' => 4,
            'calories' => 20,
            'duration' => 120,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 19,
            'workout_activity_id' => 2,
            'repetition' => 4,
            'calories' => 15,
            'duration' => 120,
        ]);

        DB::table('workout_details')->insert([
            'workout_day_id' => 20,
            'workout_activity_id' => 1,
            'repetition' => 4,
            'calories' => 20,
            'duration' => 120,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 20,
            'workout_activity_id' => 22,
            'repetition' => 2,
            'calories' => 65,
            'duration' => 100,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 20,
            'workout_activity_id' => 28,
            'repetition' => 1,
            'calories' => 30,
            'duration' => 45,
        ]);



        DB::table('workout_details')->insert([
            'workout_day_id' => 21,
            'workout_activity_id' => 8,
            'repetition' => 4,
            'calories' => 25,
            'duration' => 120,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 21,
            'workout_activity_id' => 9,
            'repetition' => 4,
            'calories' => 30,
            'duration' => 120,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 21,
            'workout_activity_id' => 10,
            'repetition' => 4,
            'calories' => 30,
            'duration' => 120,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 21,
            'workout_activity_id' => 11,
            'repetition' => 4,
            'calories' => 20,
            'duration' => 120,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 21,
            'workout_activity_id' => 17,
            'repetition' => 4,
            'calories' => 60,
            'duration' => 120,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 21,
            'workout_activity_id' => 5,
            'repetition' => 4,
            'calories' => 30,
            'duration' => 120,
        ]);

        DB::table('workout_details')->insert([
            'workout_day_id' => 22,
            'workout_activity_id' => 7,
            'repetition' => 4,
            'calories' => 30,
            'duration' => 120,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 22,
            'workout_activity_id' => 8,
            'repetition' => 2,
            'calories' => 25,
            'duration' => 100,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 22,
            'workout_activity_id' => 1,
            'repetition' => 4,
            'calories' => 20,
            'duration' => 120,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 22,
            'workout_activity_id' => 2,
            'repetition' => 4,
            'calories' => 15,
            'duration' => 120,
        ]);

        DB::table('workout_details')->insert([
            'workout_day_id' => 23,
            'workout_activity_id' => 14,
            'repetition' => 2,
            'calories' => 20,
            'duration' => 120,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 23,
            'workout_activity_id' => 21,
            'repetition' => 2,
            'calories' => 50,
            'duration' => 100,
        ]);

        DB::table('workout_details')->insert([
            'workout_day_id' => 24,
            'workout_activity_id' => 25,
            'repetition' => 1,
            'calories' => 45,
            'duration' => 45,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 24,
            'workout_activity_id' => 24,
            'repetition' => 2,
            'calories' => 80,
            'duration' => 100,
        ]);

        DB::table('workout_details')->insert([
            'workout_day_id' => 25,
            'workout_activity_id' => 9,
            'repetition' => 4,
            'calories' => 30,
            'duration' => 120,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 25,
            'workout_activity_id' => 10,
            'repetition' => 4,
            'calories' => 30,
            'duration' => 120,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 25,
            'workout_activity_id' => 11,
            'repetition' => 4,
            'calories' => 20,
            'duration' => 120,
        ]);

        DB::table('workout_details')->insert([
            'workout_day_id' => 26,
            'workout_activity_id' => 26,
            'repetition' => 2,
            'calories' => 35,
            'duration' => 100,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 26,
            'workout_activity_id' => 27,
            'repetition' => 2,
            'calories' => 40,
            'duration' => 100,
        ]);

        DB::table('workout_details')->insert([
            'workout_day_id' => 27,
            'workout_activity_id' => 3,
            'repetition' => 4,
            'calories' => 25,
            'duration' => 120,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 27,
            'workout_activity_id' => 5,
            'repetition' => 4,
            'calories' => 20,
            'duration' => 120,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 27,
            'workout_activity_id' => 7,
            'repetition' => 4,
            'calories' => 20,
            'duration' => 120,
        ]);

        DB::table('workout_details')->insert([
            'workout_day_id' => 28,
            'workout_activity_id' => 20,
            'repetition' => 2,
            'calories' => 35,
            'duration' => 100,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 28,
            'workout_activity_id' => 21,
            'repetition' => 2,
            'calories' => 40,
            'duration' => 100,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 28,
            'workout_activity_id' => 22,
            'repetition' => 2,
            'calories' => 35,
            'duration' => 100,
        ]);

        DB::table('workout_details')->insert([
            'workout_day_id' => 29,
            'workout_activity_id' => 27,
            'repetition' => 2,
            'calories' => 80,
            'duration' => 100,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 29,
            'workout_activity_id' => 28,
            'repetition' => 2,
            'calories' => 50,
            'duration' => 100,
        ]);

        DB::table('workout_details')->insert([
            'workout_day_id' => 30,
            'workout_activity_id' => 15,
            'repetition' => 4,
            'calories' => 20,
            'duration' => 120,
        ]);
        DB::table('workout_details')->insert([
            'workout_day_id' => 30,
            'workout_activity_id' => 16,
            'repetition' => 4,
            'calories' => 20,
            'duration' => 120,
        ]);
    }
}
