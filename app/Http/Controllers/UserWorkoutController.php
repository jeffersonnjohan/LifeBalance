<?php

namespace App\Http\Controllers;

use App\Models\UserWorkout;
use App\Http\Requests\StoreUserWorkoutRequest;
use App\Http\Requests\UpdateUserWorkoutRequest;

class UserWorkoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserWorkoutRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserWorkoutRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserWorkout  $userWorkout
     * @return \Illuminate\Http\Response
     */
    public function show(UserWorkout $userWorkout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserWorkout  $userWorkout
     * @return \Illuminate\Http\Response
     */
    public function edit(UserWorkout $userWorkout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserWorkoutRequest  $request
     * @param  \App\Models\UserWorkout  $userWorkout
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserWorkoutRequest $request, UserWorkout $userWorkout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserWorkout  $userWorkout
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserWorkout $userWorkout)
    {
        //
    }
}
