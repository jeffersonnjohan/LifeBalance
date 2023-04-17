<?php

namespace App\Http\Controllers;

use App\Models\WorkoutActivity;
use App\Http\Requests\StoreWorkoutActivityRequest;
use App\Http\Requests\UpdateWorkoutActivityRequest;

class WorkoutActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return 'Hello';
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
     * @param  \App\Http\Requests\StoreWorkoutActivityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWorkoutActivityRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WorkoutActivity  $workoutActivity
     * @return \Illuminate\Http\Response
     */
    public function show(WorkoutActivity $workoutActivity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WorkoutActivity  $workoutActivity
     * @return \Illuminate\Http\Response
     */
    public function edit(WorkoutActivity $workoutActivity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWorkoutActivityRequest  $request
     * @param  \App\Models\WorkoutActivity  $workoutActivity
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWorkoutActivityRequest $request, WorkoutActivity $workoutActivity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WorkoutActivity  $workoutActivity
     * @return \Illuminate\Http\Response
     */
    public function destroy(WorkoutActivity $workoutActivity)
    {
        //
    }
}
