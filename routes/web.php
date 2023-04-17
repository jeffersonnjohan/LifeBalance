<?php

use App\Http\Controllers\WorkoutActivityController;
use App\Http\Controllers\WorkoutController;
use App\Http\Controllers\WorkoutDayController;
use App\Http\Controllers\WorkoutDetailController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::redirect('/', '/login');

Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/editprofile', function () {
    return view('editprofile');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/otherprofile', function () {
    return view('otherprofile');
});

Route::get('/diet', function () {
    return view('diet.diet');
});

Route::get('/planDiet', function () {
    return view('diet.planDiet');
});


// Workout Route
// Route::get('/workouts', [WorkoutController::class, 'index']);
// Route::post('/workoutdetails', [WorkoutDetailController::class, 'index']);
// Route::post('/workoutdays', [WorkoutDayController::class, 'index']);
// Route::post('/workoutactivity',  [WorkoutActivityController::class, 'index']);

// Meditation Routes
// Route::get('/meditations', function () {
//     return view('backend.meditations');


Route::get('/workoutmeditations', function () {
    return view('workout_meditation.workout');
});

Route::get('/meditations', function () {
    return view('workout_meditation.meditation');
});

Route::get('/workoutdetails', function () {
    return view('workout_meditation.workoutDetails');
});

Route::get('/workoutdays', function () {
    return view('workout_meditation.workoutDays');
});

Route::get('/workoutactivity', function () {
    return view('workout_meditation.workoutactivity');
});

Route::get('/meditationdetails', function () {
    return view('workout_meditation.meditationDetails');
});
