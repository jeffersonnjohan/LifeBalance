<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(Request $request) {
        $id = Auth::user()->id;
        $userdata = User::where('id', $id)->first();
        $userdata['dob'] = strval(date_format(date_create($userdata['dob']), "F jS, Y"));

        $workoutPosts = DB::table('enrollment_workouts')
            ->where('is_done', true)
            ->join('workouts', 'workout_id', '=', 'workouts.id')
            ->join('users', 'user_id', '=', 'users.id')
            ->where('user_id', $id)
            ->select(DB::raw('`enrollment_workouts`.id,`enrollment_workouts`.updated_at,`workouts`.name,`workouts`.image,`users`.username'))
            ->addSelect(DB::raw('1 as type'));
            
            $dietPosts = DB::table('enrollment_diets')
            ->where('is_done', true)
            ->join('diets', 'diet_id', '=', 'diets.id')
            ->join('users', 'user_id', '=', 'users.id')
            ->where('user_id', $id)
            ->select(DB::raw('`enrollment_diets`.id,`enrollment_diets`.updated_at,`diets`.name,`diets`.image,`users`.username'))
            ->addSelect(DB::raw('2 as type'));

        // Type 1 for workout and 2 for diet 

        $posts = $workoutPosts->union($dietPosts)->get()->sortByDesc('updated_at');

        return view('profile', compact('userdata', 'posts'));
    }
}

