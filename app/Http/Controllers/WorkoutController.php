<?php

namespace App\Http\Controllers;

use App\Models\Workout;
use App\Models\WorkoutDay;
use App\Models\WorkoutDetail;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreWorkoutRequest;
use App\Http\Requests\UpdateWorkoutRequest;
use App\Models\EnrollmentWorkout;
use App\Models\WorkoutActivity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WorkoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        return view('workout_meditation.workouts', [
            "workouts" => Workout::all(),
            "enrollments" => EnrollmentWorkout::where('user_id', $id)->pluck('workout_id') // enrollment based on user
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        return view('adminpage.addWP', [
            // 'workoutNames' => ['a','b'],
            'workoutActivities' => WorkoutActivity::all(),
        ]);;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreWorkoutRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWorkoutRequest $request)
    {
        // $workout
        // [
        //     'name' => fake()->words(mt_rand(1,3),true),
        //     'description' => fake()->text(),
        //     'points' => mt_rand(5,100),
        //     'image' => 'images/workoutplan',
        // ]
        
        $workout_details = [];
        for($i = 0; $i < count($request->exerciseID); $i++){
            $workout_details[] = new WorkoutDetail([
                'repetition' => $request->repetition[$i],
                'calories' => $request->calories[$i],
                'duration' => $request->duration[$i],
                'workout_activity_id' => $request->exerciseID[$i]
            ]);
        };

        $workoutDays = [];
        $workoutDays[] = new WorkoutDay();

        $workout = new Workout([
            'name' => $request->planTitle,
            'description' => $request->description,
            'points' => $request->points,
            'image' => 'images/workoutplan',
            'dayCount' => count($workoutDays), // masih belum benar
        ]);


        $workout->save();
        $workout->workout_day()->save($workoutDays[0])->workout_detail()->saveMany($workout_details);

        // dd(WorkoutDay::find(1)->workout);

        return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Workout  $workout
     * @return \Illuminate\Http\Response
     */
    public function show(Workout $workout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Workout  $workout
     * @return \Illuminate\Http\Response
     */
    public function edit(Workout $workout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWorkoutRequest  $request
     * @param  \App\Models\Workout  $workout
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWorkoutRequest $request, Workout $workout)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Workout  $workout
     * @return \Illuminate\Http\Response
     */
    public function destroy(Workout $workout)
    {
        //
    }
}
