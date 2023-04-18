<?php

namespace App\Http\Controllers;

use App\Models\WorkoutDay;
use App\Http\Requests\StoreWorkoutDayRequest;
use App\Http\Requests\UpdateWorkoutDayRequest;
use App\Models\Workout;
use App\Models\WorkoutDetail;
use Illuminate\Http\Request;

class WorkoutDayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // workoutDays data
        $workout_id = $request->post('workout_id');
        $workout_day_id =  $request->post('workout_day_id');
        $workout_activities = WorkoutDetail::join('workout_activities', 'workout_details.workout_activity_id', '=', 'workout_activities.id')
                                        ->where('workout_details.workout_day_id', '=',  $workout_day_id)
                                        ->get();
        // workoutDetails data
        $workout = Workout::where('id', '=', $workout_id)
                        ->get();
        $workout_days = WorkoutDay::where('workout_id', '=', $workout_id)
                        ->get();
        return view('backend.workoutDays', [
            'workout_id' => $workout_id,
            'workout_day_id' => $workout_day_id,
            'day' => $request->post('day'),
            'workout_activities' => $workout_activities,
            "workout" => $workout,
            "workout_days"=> $workout_days
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
