<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EnrollmentDiet;
use App\Models\EnrollmentWorkout;
use Illuminate\Support\Facades\DB;

class CommunityController extends Controller
{
    public function index(){
        $workoutPosts = DB::table('enrollment_workouts')
            ->where('is_done', true)
            ->join('workouts', 'workout_id', '=', 'workouts.id')
            ->join('users', 'user_id', '=', 'users.id')
            ->select(DB::raw('`enrollment_workouts`.id,`enrollment_workouts`.updated_at,`workouts`.name,`workouts`.image,`users`.username,`users`.id'))
            ->addSelect(DB::raw('1 as type'));

        $dietPosts = DB::table('enrollment_diets')
            ->where('is_done', true)
            ->join('diets', 'diet_id', '=', 'diets.id')
            ->join('users', 'user_id', '=', 'users.id')
            ->select(DB::raw('`enrollment_diets`.id,`enrollment_diets`.updated_at,`diets`.name,`diets`.image,`users`.username,`users`.id'))
            ->addSelect(DB::raw('2 as type'));

        // Type 1 for workout and 2 for diet

        $posts = $workoutPosts->union($dietPosts)->get()->sortByDesc('updated_at');
        return view('home_community.community', [
            'posts' => $posts,
        ]);
    }
}
