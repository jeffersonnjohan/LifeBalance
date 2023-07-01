<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChallengeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('challenges')->insert([
            'name' => 'Getting Started',
            'description' => 'Your journey starts here',
            'points' => 250,
            'start_date' => '2023-07-17',
            'end_date' => '2023-07-25',
            'workout_plan_count' => 1,
            'diet_plan_count' => 1
        ]);
        DB::table('challenges')->insert([
            'name' => 'Healthy Habits',
            'description' => 'Commit for a 7-day workout plans two weeks in a row, boost your endurance and burn calorie',
            'points' => 200,
            'start_date' => '2023-07-03',
            'end_date' => '2023-07-18',
            'workout_plan_count' => 2,
            'diet_plan_count' => 0
        ]);
        DB::table('challenges')->insert([
            'name' => 'Getting Started',
            'description' => 'Embark on a guided journey of fitness and nutrition, achieving strength, vitality, and overall well-being.',
            'points' => 500,
            'start_date' => '2023-07-01',
            'end_date' => '2023-07-30',
            'workout_plan_count' => 2,
            'diet_plan_count' => 2
        ]);
        DB::table('challenges')->insert([
            'name' => 'Wellness Warrior',
            'description' => 'Nourish your mind and body, and unleash your inner strength.',
            'points' => 350,
            'start_date' => '2023-07-10',
            'end_date' => '2023-07-30',
            'workout_plan_count' => 1,
            'diet_plan_count' => 2
        ]);
    }
}
