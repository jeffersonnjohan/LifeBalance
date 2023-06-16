<?php

namespace Database\Factories;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Challenge>
 */
class ChallengeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public $start_date;
    public $diet_plan_count;
    public $workout_plan_count;
    public function definition()
    {
        // composer require --dev mbezhanov/laravel-faker-provider-collection
        $this->start_date = Carbon::createFromTimeStamp(fake()->dateTimeBetween('-30 days', '+30 days')->getTimestamp());
        $this->workout_plan_count = mt_rand(0,5);
        ($this->workout_plan_count === 0) ? ($this->diet_plan_count = mt_rand(1,5)) : ($this->diet_plan_count = mt_rand(0,5));
        return [
            'name' => fake()->words(mt_rand(1,3),true),
            'description' => fake()->text(),
            'points' => mt_rand(10,50),
            'start_date' => $this->start_date,
            'end_date' => Carbon::createFromFormat('Y-m-d H:i:s',$this->start_date)->addHour(),
            'workout_plan_count' => $this->workout_plan_count,
            'diet_plan_count' => $this->diet_plan_count
        ];
    }
}
