<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DietDay>
 */
class DietDayFactory extends Factory
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
            'diet_id' => mt_rand(1,5),
            'calories' => mt_rand(100,1500),
            'order' => $this->order++,
            'description' => fake()->text()
        ];
    }
}
