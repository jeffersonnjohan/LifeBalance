<?php

namespace App\Http\Controllers;

use App\Models\Workout;
use App\Models\WorkoutDay;
use Illuminate\Http\Request;
use App\Models\WorkoutDetail;
use App\Models\WorkoutActivity;
use App\Models\EnrollmentWorkout;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreWorkoutRequest;
use App\Http\Requests\UpdateWorkoutRequest;

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

        $newWorkout = $request->all();
        if($request->file('image')) {
            $newWorkout['image'] = $request->file('image')->store('workout-images');
        }

        $validated = $request->validate([
            'planTitle' => 'required|max:25|min:3',
            'description' => 'required|max:100|min:20',
            'points' => 'required',
            'image' => 'required'
        ]);

        $workout = new Workout([
            'name' => $newWorkout['planTitle'],
            'description' => $newWorkout['description'],
            'points' => $newWorkout['points'],
            'image' => $newWorkout['image'],
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
        // Eager loading relation workout_day, so n+1 problem is handled
        $workout = Workout::find($request->workoutEditID)->load(['workout_day.workout_detail']);

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
            'workoutExercises' => $workoutExercises,
            'oldImg' => $workout->image,
            'error' => []
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
        $workout = Workout::find($request->workoutID);
        $prevWorkoutDays = Workout::find($request->workoutID)->workout_day;

        $validated = Validator::make($request->all(), [
            'planTitle' => 'required|max:25|min:3',
            'description' => 'required|max:100|min:20',
            'points' => 'required',
        ]);

        if ($validated->fails()){
            $response = [];
            foreach ($validated->messages()->toArray() as $key => $value) {
                $obj = new \stdClass();
                $obj->name = $key;
                $obj->message = $value[0];

                array_push($response, $obj);
            }

            $workoutExercises = [];
            for($i = 0; $i < count($workout->workout_day); $i++){
                $workoutDetailInDayI = $workout->workout_day[$i]->workout_detail;

                $workoutExercise = [];
                for($j = 0; $j < count($workoutDetailInDayI); $j++){
                    $workoutExercise[] = $workoutDetailInDayI[$j];
                }
                $workoutExercises[] = $workoutExercise;
            }
            return view('adminpage.editWP', [
                'workoutActivities' => WorkoutActivity::all(),
                'workout' => $workout,
                'workoutExercises' => $workoutExercises,
                'oldImg' => $workout->image,
                'error' => $response
            ]);
        }

        foreach($prevWorkoutDays as $prevWorkoutDay){
            $prevWorkoutDetailsInADay = $prevWorkoutDay->workout_detail;
            foreach($prevWorkoutDetailsInADay as $prevWorkoutDetailInADay){
                WorkoutDetail::destroy($prevWorkoutDetailInADay->id);
            }
            WorkoutDay::destroy($prevWorkoutDay->id);
        }

        $dayCount = count($request->exerciseID);
        // Workout Day
        $workoutDays = [];

        for($i = 0; $i < $dayCount; $i++){

            // if(isset($request->workoutDayID[$i])){
            //     $workoutDays[] = WorkoutDay::find($request->workoutDayID[$i]);
            // } else{
                $workoutDays[] = new WorkoutDay();
            // }
        }
        $workout = Workout::find($request->workoutID);

        if($request->file('image')) {
            if($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $workout->image = $request->file('image')->store('workout-images');
        } else {
            $workout->image = $request->oldImage;
        }

        $workout->update([
            'name' => $request->planTitle,
            'description' => $request->description,
            'points' => $request->points,
            'image' => $workout->image,
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

                // if(isset($request->workoutDetailID[$i][$j])){
                //     WorkoutDetail::find($request->workoutDetailID[$i][$j])->update($data);
                //     $workoutDetailInDayI[] = WorkoutDetail::find($request->workoutDetailID[$i][$j]);
                // } else{
                    $workoutDetailInDayI[] = new WorkoutDetail($data);
                // }

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
    public function destroy(Request $request)
    {
        $prevWorkoutDays = Workout::find($request->workoutDeleteID)->workout_day;

        foreach($prevWorkoutDays as $prevWorkoutDay){
            $prevWorkoutDetailsInADay = $prevWorkoutDay->workout_detail;
            foreach($prevWorkoutDetailsInADay as $prevWorkoutDetailInADay){
                WorkoutDetail::destroy($prevWorkoutDetailInADay->id);
            }
            WorkoutDay::destroy($prevWorkoutDay->id);
        }

        $workoutImg = Workout::find($request->workoutDeleteID)->image;

        Storage::delete($workoutImg);
        Workout::destroy($request->workoutDeleteID);

        return redirect('/admin/workout');
    }
}
