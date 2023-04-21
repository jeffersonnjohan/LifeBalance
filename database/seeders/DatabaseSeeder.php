<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Challenge;
use App\Models\Collect;
use App\Models\Diet;
use App\Models\DietDay;
use App\Models\EnrollmentDiet;
use App\Models\EnrollmentWorkout;
use App\Models\Meditation;
use App\Models\User;
use App\Models\UserDiet;
use App\Models\UserWeight;
use App\Models\UserWorkout;
use App\Models\Workout;
use App\Models\WorkoutDay;
use App\Models\WorkoutDetail;
use App\Models\WorkoutActivity;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::factory(5)->create();
        UserWeight::factory(30)->create();
        UserWorkout::factory(30)->create();
        UserDiet::factory(30)->create();

        Meditation::factory(5)->create();

        Workout::factory(5)->create();
        WorkoutDay::factory(7)->create();
        WorkoutActivity::factory(10)->create();
        WorkoutDetail::factory(30)->create();

        Diet::factory(5)->create();
        DietDay::factory(30)->create();

        Challenge::factory(5)->create();
        Collect::factory(2)->create();

        EnrollmentDiet::factory(2)->create();
        EnrollmentWorkout::factory(2)->create();
    }
}
