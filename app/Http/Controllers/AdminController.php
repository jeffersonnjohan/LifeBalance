<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function workout() {
        // $this->authorize('admin');
        return view('adminpage.listWorkout');
    }
}
