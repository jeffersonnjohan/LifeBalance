<?php

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

Route::get('/workout_plans', function () {
    return view('backend.workout_plans');
});
Route::get('/meditations', function () {
    return view('backend.meditations');
});

Route::get('/glenys', function () {
    return view('glenys');
});

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

Route::get('/diet', function () {
    return view('diet');
});

Route::get('/workoutmeditations', function () {
    return view('workout_meditation.workout');
});