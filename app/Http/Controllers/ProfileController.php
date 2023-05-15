<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(Request $request) {
        $id = Auth::user()->id;
        $userdata = User::where('id', $id)->first();
        $userdata['dob'] = strval(date_format(date_create($userdata['dob']), "F jS, Y"));
        // return $userdata;
        return view('profile', compact('userdata'));
        // return view('profile', compact('userdata'));
    }
}

