<?php

namespace App\Http\Controllers;

use App\Models\WorkoutActivity;
use App\Http\Requests\StoreWorkoutActivityRequest;
use App\Http\Requests\UpdateWorkoutActivityRequest;
use App\Models\User;
use App\Models\Workout;
use App\Models\WorkoutDay;
use App\Models\WorkoutDetail;
use Illuminate\Http\Request;

class WorkoutActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // workoutActivity data
        $workout_id = $request->post('workout_id');
        $workout_day_id =  $request->post('workout_day_id');
        $workout_activity = WorkoutDetail::firstWhere('workout_day_id',  $workout_day_id)->workout_activity;

        return view('workout_meditation.workoutActivity', [
            'workout_id' => $workout_id,
            'workout_day_id' => $workout_day_id,
            'day' => $request->post('day'),
            'workout_activity' => $workout_activity
        ]);
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
