<?php

namespace App\Http\Controllers;

use App\Models\Diet;
use App\Models\EnrollmentDiet;
use App\Models\EnrollmentWorkout;
use App\Models\History;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HistoryController extends Controller
{
    public function index()
    {
        $id = Auth::user()->id;
        // add validation, based on user enrollment
        $enrollment_diets = EnrollmentDiet::join('diets', 'diets.id', '=', 'enrollment_diets.diet_id')
                                        ->where('user_id', $id);
        $enrollment_workouts = EnrollmentWorkout::join('workouts', 'workouts.id', '=', 'enrollment_workouts.workout_id')
                                        ->where('user_id', $id);

        // $enrollment_diets = EnrollmentDiet::all();
        // foreach($enrollment_diets as $dietss){
        //     echo $dietss->diet;
        // }
        // $enrollment_diets = EnrollmentDiet::with('diet')->getQuery();
        // $enrollment_workouts = EnrollmentWorkout::with('workout')->getQuery();

        $enrollments = $enrollment_diets->union($enrollment_workouts)
                                        ->orderByRaw('updated_at DESC')
                                        ->get();

        // dd($enrollment_diets, $enrollment_workouts, $enrollments);
        return view('history', [
            'enrollments' => $enrollments
        ]);
    }
}
?>
