<?php

namespace App\Http\Controllers;

use App\Models\WorkoutDay;
use App\Http\Requests\StoreWorkoutDayRequest;
use App\Http\Requests\UpdateWorkoutDayRequest;

class WorkoutDayController extends Controller
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
     * @param  \App\Http\Requests\StoreWorkoutDayRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWorkoutDayRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WorkoutDay  $workoutDay
     * @return \Illuminate\Http\Response
     */
    public function show(WorkoutDay $workoutDay)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WorkoutDay  $workoutDay
     * @return \Illuminate\Http\Response
     */
    public function edit(WorkoutDay $workoutDay)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWorkoutDayRequest  $request
     * @param  \App\Models\WorkoutDay  $workoutDay
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWorkoutDayRequest $request, WorkoutDay $workoutDay)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WorkoutDay  $workoutDay
     * @return \Illuminate\Http\Response
     */
    public function destroy(WorkoutDay $workoutDay)
    {
        //
    }
}
