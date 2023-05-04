<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserDiet;
use App\Models\UserWorkout;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $id = session('activeId');
        $user = User::firstWhere('id', $id);

        $bmi = round($user->weight/(($user->height/100)*($user->height/100)), 2); // BMI = weight(kg) / height(m)^2

        // Calculation Total Calories
        $caloriesIn = UserDiet::where('user_id', $id)->sum('calories_in');
        $caloriesOut = UserWorkout::where('user_id', $id)->sum('calories_out');
        $totalCalories = $caloriesIn - $caloriesOut;

        return view('/home_community/home', [
            'name' => $user->username,
            'bmi' => $bmi,
            'streak' => $user->streak_count,
            'caloriesIn' => $caloriesIn,
            'caloriesOut' => $caloriesOut,
            'totalCalories' => $totalCalories,
            'categoryBmi' => $this->categoryBmi($bmi),
        ]);
    }

    private function categoryBmi($bmi){
        if($bmi < 18.5){
            return 'Underweight';
        } else if($bmi < 24.9){
            return 'Normal';
        } else{
            return 'Overweight';
        }
    }
}
?>
