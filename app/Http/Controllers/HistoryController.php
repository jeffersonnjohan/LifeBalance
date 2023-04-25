<?php

namespace App\Http\Controllers;

use App\Models\Diet;
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
        $enrollments = $enrollment_diets->union($enrollment_workouts)->orderByRaw('updated_at DESC')->get();

        return view('backend.history', [
            'enrollments' => $enrollments
        ]);
    }
}
?>
