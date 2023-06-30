<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkoutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('workouts')->insert([
            'name' => 'Healthy Habits',
            'description' => 'Embark on a journey to adopt healthy habits, including workout and diet plans, mindfulness, hydration, sleep, and avoiding processed foods.',
            'points' => 250,
            'image' => 'images/workoutplan',
        ]);
        DB::table('workouts')->insert([
            'name' => '14-Day Total Transformation',
            'description' => 'Transform your body and mind through a comprehensive workout and diet plan, focusing on strength training, cardio, and self-care.',
            'points' => 500,
            'image' => 'images/workoutplan',
        ]);
        DB::table('workouts')->insert([
            'name' => 'Wellness Warrior',
            'description' => 'Elevate your overall well-being with a combination of physical exercises, meditation, nutritious eating, hydration, and quality sleep.',
            'points' => 350,
            'image' => 'images/workoutplan',
        ]);
    }
}
