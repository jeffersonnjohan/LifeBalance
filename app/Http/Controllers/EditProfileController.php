<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;

class EditProfileController extends Controller
{
    public function index() {
        $userdata = User::where('id', session('activeId'))->first();
        return view('/editprofile', compact('userdata'));
    }

    public function updateData(Request $request) {
        $updated = $request->all();
        // unset($updated[count($updated) - 1]);
        $temp = User::where('id', session('activeId'))->update([
            'username' => $updated['username'],
            'address' => $updated['address'],
            'dob' => $updated['dob'],
            'image' => '/images/'.$updated['image'],
            'weight' => $updated['weight'],
            'height' => $updated['height'],
            'password' => bcrypt($updated['password'])
        ]);

        // $temp::except(['users'.'updated_at']);
        return redirect('/profile');
    }
}
