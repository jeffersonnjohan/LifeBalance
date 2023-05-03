<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class ProfileController extends Controller
{
    public function index(Request $request) {
        $userdata = User::where('id', session('activeId'))->first();
        $userdata['dob'] = strval(date_format(date_create($userdata['dob']), "F jS, Y"));
        // return $userdata;
        return view('profile', compact('userdata'));
        // return view('profile', compact('userdata'));
    }
}

