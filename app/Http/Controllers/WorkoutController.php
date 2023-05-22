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
    public function allWorkouts()
    {
        $id = Auth::user()->id;
        return view('workout_meditation.workouts', [
            "workouts" => Workout::all(),
            "enrollments" => EnrollmentWorkout::where('user_id', $id)->pluck('workout_id') // enrollment based on user
        ]);
    }
    
    public function index(){
        return view('adminpage.listWorkout', [
            "workouts" => Workout::all()
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
        
        $dayCount = count($request->exerciseID);
        // Workout Day
        $workoutDays = [];
        
        for($i = 0; $i < $dayCount; $i++){
            $workoutDays[] = new WorkoutDay();
        }
        
        
        $workout = new Workout([
            'name' => $request->planTitle,
            'description' => $request->description,
            'points' => $request->points,
            'image' => 'images/workoutplan',
            'day_count' => $dayCount,
        ]);
        
        // Workout Details
        $workout_details = [];

        for($i = 0; $i < $dayCount; $i++){
            $detailOnDayICount = count($request->exerciseID[$i]);

            $workoutDetailInDayI = [];
            for($j = 0; $j < $detailOnDayICount; $j++){
                $workoutDetailInDayI[] = new WorkoutDetail([
                    'repetition' => $request->repetition[$i][$j],
                    'calories' => $request->calories[$i][$j],
                    'duration' => $request->duration[$i][$j],
                    'workout_activity_id' => $request->exerciseID[$i][$j]
                ]);
            };

            $workout_details[] = $workoutDetailInDayI;
        }
        
        $workout->save();
        
        $workoutDaysSaved = $workout->workout_day()->saveMany($workoutDays);

        for($i = 0; $i < count($workoutDaysSaved); $i++){
            $workoutDaysSaved[$i]->workout_detail()->saveMany($workout_details[$i]);
        }
        
        return redirect('/admin/workout');
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
    public function edit(Request $request)
    {
        $workout = Workout::find($request->workoutEditID)->load(['workout_day']);

        $workoutExercises = [];
        for($i = 0; $i < count($workout->workout_day); $i++){
            $workoutDetailInDayI = $workout->workout_day[$i]->workout_detail;

            $workoutExercise = [];
            for($j = 0; $j < count($workoutDetailInDayI); $j++){
                $workoutExercise[] = $workoutDetailInDayI[$j];
            }
            $workoutExercises[] = $workoutExercise;
        }

        // dd(json_encode($workoutExercises));
        return view('adminpage.editWP', [
            'workoutActivities' => WorkoutActivity::all(),
            'workout' => $workout,
            'workoutExercises' => $workoutExercises
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWorkoutRequest  $request
     * @param  \App\Models\Workout  $workout
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWorkoutRequest $request)
    {
        $dayCount = count($request->exerciseID);
        // Workout Day
        $workoutDays = [];
        
        for($i = 0; $i < $dayCount; $i++){

            if(isset($request->workoutDayID[$i])){
                $workoutDays[] = WorkoutDay::find($request->workoutDayID[$i]);
            } else{
                $workoutDays[] = new WorkoutDay();
            }
        }
        
        $workout = Workout::find($request->workoutID);
        $workout->update([
            'name' => $request->planTitle,
            'description' => $request->description,
            'points' => $request->points,
            'image' => 'images/workoutplan',
            'day_count' => $dayCount,
        ]);
        // Workout Details
        $workout_details = [];
        
        for($i = 0; $i < $dayCount; $i++){
            $detailOnDayICount = count($request->exerciseID[$i]);
            
            $workoutDetailInDayI = [];
            for($j = 0; $j < $detailOnDayICount; $j++){
                $data = [
                    'repetition' => $request->repetition[$i][$j],
                    'calories' => $request->calories[$i][$j],
                    'duration' => $request->duration[$i][$j],
                    'workout_activity_id' => $request->exerciseID[$i][$j]
                ];

                if(isset($request->workoutDetailID[$i][$j])){
                    WorkoutDetail::find($request->workoutDetailID[$i][$j])->update($data);
                    $workoutDetailInDayI[] = WorkoutDetail::find($request->workoutDetailID[$i][$j]);
                } else{
                    $workoutDetailInDayI[] = new WorkoutDetail($data);
                }
                
            }
            
            $workout_details[] = $workoutDetailInDayI;
        }
        
        $workoutDaysSaved = $workout->workout_day()->saveMany($workoutDays);
        
        for($i = 0; $i < count($workoutDaysSaved); $i++){
            $workoutDaysSaved[$i]->workout_detail()->saveMany($workout_details[$i]);
        }
        
        return redirect('/admin/workout');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Workout  $workout
     * @return \Illuminate\Http\Response
     */
    public function destroy(Workout $workout, Request $request)
    {
        //
        return $request;
    }
}
