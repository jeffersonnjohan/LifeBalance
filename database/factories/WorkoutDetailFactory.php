<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WorkoutDetail>
 */
class WorkoutDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        static $order = 1;
        return [
            'workout_day_id' => mt_rand(1,30),
            'workout_activity_id' => mt_rand(1,10),
            'repetition' => mt_rand(10,30),
            'calories' => mt_rand(1,500),
            'duration' => mt_rand(30,300),
            'order' => $order++
        ];
    }
}
