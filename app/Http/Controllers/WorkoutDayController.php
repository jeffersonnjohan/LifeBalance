<?php

namespace App\Http\Controllers;

use App\Models\WorkoutDay;
use App\Http\Requests\StoreWorkoutDayRequest;
use App\Http\Requests\UpdateWorkoutDayRequest;
use App\Models\EnrollmentWorkout;
use App\Models\EnrollmentWorkoutsFinish;
use App\Models\Workout;
use App\Models\WorkoutDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $day = $request->post('day');

        $workout_days = WorkoutDay::where('id', $workout_day_id)->get();
        $workout_details = WorkoutDetail::where('workout_day_id',  $workout_day_id)->get();

        return view('workout_meditation.workoutDays', [
            'workout_id' => $workout_id,
            'workout_day_id' => $workout_day_id,
            'day' => $day,
            "workout_days"=> $workout_days,
            "workout_details"=> $workout_details,
            'checkbox' => $this->checkbox($workout_id, $day)
        ]);
    }

    private function checkbox($workout_id, $day){
        $id = Auth::user()->id;
        $finished_day = EnrollmentWorkout::where('workout_id', $workout_id)
                        ->where('user_id', $id)
                        ->pluck('finished_day');

        return ($finished_day[0] >= (int)$day) ?  "checked disabled" : "";
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
