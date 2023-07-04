<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DietSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('diets')->insert([
            'name' => '7-Day Vegetarian Wellness',
            'description' => 'Promotes a healthy and balanced lifestyle by incorporating a variety of plant-based foods rich in nutrients and flavors. Each day offers delicious vegetarian meals while maintaining an appropriate calorie range.',
            'points' => 250,
            'image' => 'diet-images/7-Day Vegetarian Wellness.png'
        ]);
        DB::table('diets')->insert([
            'name' => '14-Day Calorie Deficit',
            'description' => 'This 14-day calorie deficit plan is designed to help you kickstart your weight loss journey by creating a moderate calorie deficit. By following this plan, you can achieve a gradual and sustainable reduction in calories while still obtaining essential nutrients.',
            'points' => 700,
            'image' => 'diet-images/14-Day Calorie Deficit.png'
        ]);
        DB::table('diets')->insert([
            'name' => '7-Day Plant-Powered',
            'description' => 'Embraces the power of plant-based foods to support a healthy and sustainable lifestyle. Each day offers delicious and nutrient-dense vegan meals while keeping the calorie intake in balance.',
            'points' => 250,
            'image' => 'diet-images/7-Day Plant-Powered.png'
        ]);
        DB::table('diets')->insert([
            'name' => '7-Day Healthy Lifestyle',
            'description' => 'This comprehensive 7-day diet plan is designed to help you adopt a healthy lifestyle and achieve your weight management goals. It provides a balanced combination of nutritious foods while keeping the calorie intake in check.',
            'points' => 250,
            'image' => 'diet-images/7-Day Healthy Lifestyle.png'
        ]);
        DB::table('diets')->insert([
            'name' => '7-Day Pescatarian Delight',
            'description' => 'This 7-day pescatarian diet plan offers a variety of nutritious and delicious meals centered around plant-based foods and seafood. Each day provides a balanced intake of essential nutrients while maintaining a moderate calorie range.',
            'points' => 250,
            'image' => 'diet-images/7-Day Pescatarian Delight.png'
        ]);
    }
}
