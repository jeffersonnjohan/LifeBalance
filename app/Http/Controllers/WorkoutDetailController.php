<?php

namespace App\Http\Controllers;

use App\Models\WorkoutDetail;
use App\Http\Requests\StoreWorkoutDetailRequest;
use App\Http\Requests\UpdateWorkoutDetailRequest;
use App\Models\EnrollmentWorkout;
use App\Models\Workout;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WorkoutDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $workout_id = $request->post('workout_id');
        if($request->post('new_plan')){
            $data = array(
                'user_id' => session('activeId'),
                'workout_id' => $workout_id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            );
            EnrollmentWorkout::insert($data);
        }

        // workoutDetails data
        $workout = DB::table('workouts')
                        ->where('id', '=', $workout_id)
                        ->get();
        $workout_days = DB::table('workout_days')
                        ->where('workout_id', '=', $workout_id)
                        ->get();


        $is_done = DB::table('enrollment_workouts')
                    ->where('workout_id', '=', $workout_id)
                    ->where('user_id', session('activeId'))
                    ->pluck('is_done');

        // if checkbox checked, then workout_value = 1
        if($request->post('workout_value') && !$is_done[0]){
            $finished_day = DB::table('enrollment_workouts')
                            ->where('workout_id', '=', $workout_id)
                            ->where('user_id', session('activeId'))
                            ->pluck('finished_day');

            $day_count = DB::table('workouts')
                            ->where('id', '=', $workout_id)
                            ->pluck('day_count');

            // finished_day++
            $date = \Carbon\Carbon::now()->format('Y-m-d h:i:s');
            DB::table('enrollment_workouts')
                ->where('workout_id', '=', $workout_id)
                ->where('user_id', session('activeId'))
                ->update(['finished_day' => $finished_day[0] +  1,
                        'updated_at' => $date]);

            // if day_count == finished_day, update is_done to 1
            if($day_count->contains($finished_day[0] + 1)){
                DB::table('enrollment_workouts')
                ->where('workout_id', '=', $workout_id)
                ->where('user_id', session('activeId'))
                ->update(['is_done' => 1]);
            }
        }

        // temporary:
        // if day_count is 0 in workouts, do this:
        if(Workout::where('day_count', 0)){
            DB::table('workouts')
            ->join('workout_days', 'workout_days.workout_id', '=', 'workouts.id')
            ->where('workout_id', '=', $workout_id)
            ->update(['day_count' => $workout_days->count()]);
        }

        $enrollment = EnrollmentWorkout::where('workout_id', $workout_id)
                                        ->where('user_id', session('activeId'))
                                        ->get();

        return view('backend.workoutDetails', [
            "workout_id" => $workout_id,
            "workout" => $workout,
            "workout_days"=> $workout_days,
            'enrollment' => $enrollment
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
