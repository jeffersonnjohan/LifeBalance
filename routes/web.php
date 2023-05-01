<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\DietController;
use App\Http\Controllers\DietDayController;
use App\Http\Controllers\EnrollmentWorkoutController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\MeditationController;
use App\Http\Controllers\WorkoutActivityController;
use App\Http\Controllers\WorkoutController;
use App\Http\Controllers\WorkoutDayController;
use App\Http\Controllers\WorkoutDetailController;
use App\Models\EnrollmentWorkout;
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

Route::post('/signup', [SignupController::class, 'store']);

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

Route::get('/challenges', function () {
    return view('challenges');
});

Route::get('/history', function () {
    return view('history');
});

Route::get('/home', function () {
    return view('home_community.home');
});

Route::get('/community', function () {
    return view('home_community.community');
});

Route::get('/inputweight', function () {
    return view('home_community.inputweight');
});

// ADMIN PAGE
Route::get('/admin/workout', function () {
    return view('adminpage.listWorkout');
});

Route::get('/admin/workout/add', function () {
    return view('adminpage.addWP');
});

Route::get('/admin/meditation', function () {
    return view('adminpage.listMeditation');
});

Route::get('/admin/meditation/add', function () {
    return view('adminpage.addMP');
});

Route::get('/admin/diet', function () {
    return view('adminpage.listDiet');
});

Route::get('/admin/diet/add', function () {
    return view('adminpage.addDP');
});

Route::get('/admin/challenges', function () {
    return view('adminpage.listChallenges');
});

Route::get('/admin/challenges/add', function () {
    return view('adminpage.addChallenge');
});

// ADDITIONAL ADMIN PAGE - EDIT PLAN
Route::get('/admin/workout/edit', function () {
    return view('adminpage.editWP');
});

Route::get('/admin/meditation/edit', function () {
    return view('adminpage.editMP');
});

Route::get('/admin/diet/edit', function () {
    return view('adminpage.editDP');
});

Route::get('/admin/challenges/edit', function () {
    return view('adminpage.editChallenge');
});

// Home | Community Route
// Route::get('/home', [HomeController::class, 'index']);
// Route::post('/community', [CommunityController::class, 'index']);

// Workout Route
Route::get('/workouts', [WorkoutController::class, 'index']);
Route::post('/workoutdetails', [WorkoutDetailController::class, 'index']);
Route::post('/workoutdays', [WorkoutDayController::class, 'index']);
Route::post('/workoutactivity',  [WorkoutActivityController::class, 'index']);

// Meditation Routes
Route::get('/meditations', [MeditationController::class, 'index']);
Route::post('/meditationDetails', [MeditationController::class, 'show']);

// Diet Routes
Route::get('/diets', [DietController::class, 'index']);
Route::post('/dietdays', [DietDayController::class, 'index']);
Route::post('/backtodiets', [DietDayController::class, 'index2']);

// Diet History
Route::get('/history', [HistoryController::class, 'index']);



// Routes Jeff. Nanti hapus aja
// Route::get('/workoutmeditationsjeff', function () {
//     return view('workout_meditation.workouts');
// });

// Route::get('/meditationsjeff', function () {
//     return view('workout_meditation.meditation');
// });

// Route::get('/workoutdetailsjeff', function () {
//     return view('workout_meditation.workoutDetails');
// });

// Route::get('/workoutdaysjeff', function () {
//     return view('workout_meditation.workoutDays');
// });

// Route::get('/workoutactivityjeff', function () {
//     return view('workout_meditation.workoutactivity');
// });

// Route::get('/meditationdetailsjeff', function () {
//     return view('workout_meditation.meditationDetails');
// });
