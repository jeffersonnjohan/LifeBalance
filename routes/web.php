<?php

use App\Http\Controllers\ChallengeController;
use GuzzleHttp\Middleware;
use App\Models\EnrollmentWorkout;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DietController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\DietDayController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WorkoutController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\MeditationController;
use App\Http\Controllers\WorkoutDayController;
use App\Http\Controllers\EditProfileController;
use App\Http\Controllers\WorkoutDetailController;
use App\Http\Controllers\WorkoutActivityController;
use App\Http\Controllers\EnrollmentWorkoutController;
use App\Models\Diet;
use App\Models\UserWeight;

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

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/signup', [SignupController::class, 'index'])->middleware('guest');
Route::post('/signup', [SignupController::class, 'store']);

Route::get('/logout', [LogoutController::class, 'logout']);

Route::get('/editprofile', [EditProfileController::class, 'index'])->middleware('auth');
Route::post('/editprofile', [EditProfileController::class, 'updateData']);

Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth');

Route::get('/otherprofile', function () {
    return view('otherprofile');
})->middleware('auth');

// Route::get('/diets', function () {
//     return view('diet.diets');
// });

// Route::get('/planDiet', function () {
//     return view('diet.planDiet');
// });

// Route::get('/challenges', function () {
//     return view('challenges');
// });

Route::resource('/challenges', ChallengeController::class)->middleware('auth');

// Route::get('/history', function () {
//     return view('history');
// });

// Route::get('/home', function () {
//     return view('home_community.home');
// });

// Route::get('/community', function () {
//     return view('home_community.community');
// });

// ADMIN PAGE
Route::post('/admin/workout/edit', [WorkoutController::class, 'edit'])->middleware('admin');
Route::post('/admin/workout/delete', [WorkoutController::class, 'destroy'])->middleware('admin');
Route::post('/admin/workout/update', [WorkoutController::class, 'update'])->middleware('admin');

Route::resource('/admin/workout', WorkoutController::class)->only('index', 'create', 'store')->middleware('admin');

Route::get('/admin/meditation', function () {
    return view('adminpage.listMeditation');
});

Route::get('/admin/meditation/add', function () {
    return view('adminpage.addMP');
});

Route::post('/admin/diet/delete', [DietController::class, 'destroy']);
Route::post('/admin/diet/edit', [DietController::class, 'edit']);
Route::post('/admin/diet/update', [DietController::class, 'update']);
Route::resource('/admin/diet', DietController::class);

// Route::get('/admin/diet', function () {
//     return view('adminpage.listDiet');
// });

// Route::get('/admin/diet/add', function () {
//     return view('adminpage.addDP');
// });

Route::get('/admin/challenges', function () {
    return view('adminpage.listChallenges');
});

Route::get('/admin/challenges/add', function () {
    return view('adminpage.addChallenge');
});

// ADDITIONAL ADMIN PAGE - EDIT PLAN
Route::get('/admin/meditation/edit', function () {
    return view('adminpage.editMP');
});

// Route::get('/admin/diet/edit', function () {
//     return view('adminpage.editDP');
// });

Route::get('/admin/challenges/edit', function () {
    return view('adminpage.editChallenge');
});

// Home | Community Route
Route::get('/home', [HomeController::class, 'index'])->middleware('auth');
Route::post('/home', [UserWeight::class, 'store'])->middleware('auth');
Route::get('/community', [CommunityController::class, 'index']);

// Workout Route
Route::get('/workouts', [WorkoutController::class, 'allWorkouts']);
Route::post('/workoutdetails', [WorkoutDetailController::class, 'index']);
Route::post('/workoutdays', [WorkoutDayController::class, 'index']);
Route::post('/workoutactivity',  [WorkoutActivityController::class, 'index']);

// Meditation Routes
Route::get('/meditations', [MeditationController::class, 'index']);
Route::post('/meditationDetails', [MeditationController::class, 'show']);

// Diet Routes
Route::get('/diets', [DietController::class, 'allDiets']);
Route::post('/dietDays', [DietDayController::class, 'index']);
Route::post('/backtodiets', [DietDayController::class, 'index2']);

// Diet History
Route::get('/history', [HistoryController::class, 'index']);