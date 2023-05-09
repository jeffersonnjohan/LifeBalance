<?php

namespace App\Http\Controllers;

use App\Models\Diet;
use App\Models\EnrollmentDiet;
use App\Models\EnrollmentWorkout;
use App\Models\History;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HistoryController extends Controller
{
    public function index()
    {
        // add validation, based on user enrollment
        $enrollment_diets = DB::table('enrollment_diets')->join('diets', 'diets.id', '=', 'enrollment_diets.diet_id');
        $enrollment_workouts = DB::table('enrollment_workouts')->join('workouts', 'workouts.id', '=', 'enrollment_workouts.workout_id');

        $enrollment_diets = EnrollmentDiet::all();
        foreach($enrollment_diets as $dietss){
            echo $dietss->diet;
        }
        // $enrollment_diets = EnrollmentDiet::with('diet')->getQuery();
        // $enrollment_workouts = EnrollmentWorkout::with('workout')->getQuery();

        $enrollments = $enrollment_diets->union($enrollment_workouts)
                                        ->orderByRaw('updated_at DESC')
                                        ->get();
        $enrollments = $enrollments->where('user_id', session('activeId'));

        return view('backend.history', [
            'enrollments' => $enrollments
        ]);
    }
}
?>
