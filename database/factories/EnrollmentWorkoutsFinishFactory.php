<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EnrollmentWorkoutsFinish>
 */
class EnrollmentWorkoutsFinishFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'enrollment_workout_id' => mt_rand(1,2)
            // 'workout_day_id' => input manually on controller, when page is opened
        ];
    }
}
