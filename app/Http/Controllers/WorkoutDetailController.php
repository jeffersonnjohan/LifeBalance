<?php

namespace App\Http\Controllers;

use App\Models\WorkoutDetail;
use App\Http\Requests\StoreWorkoutDetailRequest;
use App\Http\Requests\UpdateWorkoutDetailRequest;

class WorkoutDetailController extends Controller
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
     * @param  \App\Http\Requests\StoreWorkoutDetailRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWorkoutDetailRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WorkoutDetail  $workoutDetail
     * @return \Illuminate\Http\Response
     */
    public function show(WorkoutDetail $workoutDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WorkoutDetail  $workoutDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(WorkoutDetail $workoutDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWorkoutDetailRequest  $request
     * @param  \App\Models\WorkoutDetail  $workoutDetail
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWorkoutDetailRequest $request, WorkoutDetail $workoutDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WorkoutDetail  $workoutDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(WorkoutDetail $workoutDetail)
    {
        //
    }
}
