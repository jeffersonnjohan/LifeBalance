<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Diet>
 */
class DietFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->words(mt_rand(1,3),true),
            'description' => fake()->text(),
            'points' => mt_rand(5,100),
            'image' => 'images/dietplan',
        ];
    }
}
