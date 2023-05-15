<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserDiet;
use App\Models\UserWeight;
use App\Models\UserWorkout;
use Illuminate\Http\Request;
use App\Models\EnrollmentWorkout;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() {
        $id = Auth::user()->id;
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
            'leaderboards' => $this->leaderboard(),
            'unfinishedPlans' => $this->unfinishedPlan($id),
            'weightList' => json_encode($this->bodyWeightStatistic($id)),
            'caloriesInList' => json_encode($this->caloriesInStatistic($id)),
            'caloriesOutList' => json_encode($this->caloriesOutStatistic($id)),
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

    private function leaderboard(){
        return User::all()->sortByDesc('points')->take(5);
    }

    private function unfinishedPlan($id){
        return EnrollmentWorkout::where('user_id', $id)->where('is_done', false)->get()->load(['workout']);
    }

    private function bodyWeightStatistic($id){
        // Mengembalikan list berat selama 1 minggu terakhir
        $endDate = date("Y-m-d").' 23:59:59';
        $startDate = $this->dateBefore($endDate, 6);

        $list = [$startDate];
        $firstWeightList = $this->weightInDate($id, $startDate);
        $weightList = [$firstWeightList];

        $currDate = $startDate;
        for($i = 0; $i < 6; $i++){
            $currDate = $this->dateAfter($currDate, 1);
            $list[] = $currDate;
            $weightList[] = $this->weightInDate($id, $currDate);
        }

        return $weightList;
    }

    private function dateBefore($date, $n){
        return date_format(date_sub(date_create($date), date_interval_create_from_date_string("$n days")), "Y-m-d");
    }

    private function dateAfter($date, $n){
        return date_format(date_add(date_create($date), date_interval_create_from_date_string("$n days")), "Y-m-d");
    }

    private function weightInDate($id, $date){
        return UserWeight::where('user_id', $id)->where('created_at', '>=' , $date)->where('created_at', '<=' , $this->dateAfter($date, 1).' 00:00:00')->get()[0]->weight ?? 0;
    }

    private function caloriesInOnDate($id, $date){
        return UserDiet::where('user_id', $id)->where('created_at', '>=' , $date)->where('created_at', '<=' , $this->dateAfter($date, 1).' 00:00:00')->get()[0]->calories_in ?? 0;
    }

    private function caloriesOutOnDate($id, $date){
        return UserWorkout::where('user_id', $id)->where('created_at', '>=' , $date)->where('created_at', '<=' , $this->dateAfter($date, 1).' 00:00:00')->get()[0]->calories_out ?? 0;
    }

    private function caloriesInStatistic($id){
        // Mengembalikan list berat selama 1 minggu terakhir
        $endDate = date("Y-m-d").' 23:59:59';
        $startDate = $this->dateBefore($endDate, 6);

        $list = [$startDate];
        $firstCaloriesIn = $this->caloriesInOnDate($id, $startDate);
        $caloriesInList = [$firstCaloriesIn];

        $currDate = $startDate;
        for($i = 0; $i < 6; $i++){
            $currDate = $this->dateAfter($currDate, 1);
            $list[] = $currDate;
            $caloriesInList[] = $this->caloriesInOnDate($id, $currDate);
        }

        return $caloriesInList;
    }

    private function caloriesOutStatistic($id){
        // Mengembalikan list berat selama 1 minggu terakhir
        $endDate = date("Y-m-d").' 23:59:59';
        $startDate = $this->dateBefore($endDate, 6);

        $list = [$startDate];
        $firstCaloriesOut = $this->caloriesOutOnDate($id, $startDate);
        $caloriesOutList = [$firstCaloriesOut];

        $currDate = $startDate;
        for($i = 0; $i < 6; $i++){
            $currDate = $this->dateAfter($currDate, 1);
            $list[] = $currDate;
            $caloriesOutList[] = $this->caloriesOutOnDate($id, $currDate);
        }

        return $caloriesOutList;
    }
}
?>
