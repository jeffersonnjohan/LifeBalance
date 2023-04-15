<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\WorkoutDay>
 */
class WorkoutDayFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public $order = 1;
    public function definition()
    {
        return [
            'workout_id' => mt_rand(1,5),
            'order' => $this->order++
        ];
    }

}
