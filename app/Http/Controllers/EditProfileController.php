<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Storage;

class EditProfileController extends Controller
{
    public function index() {
        $userdata = User::where('id', session('activeId'))->first();
        return view('/editprofile', compact('userdata'));
    }

    public function updateData(Request $request) {
        $updated = $request->all();
        // unset($updated[count($updated) - 1]);
        if($request->file('image')) {
            if($updated['oldImage']) {
                Storage::delete($updated['oldImage']);
            }
            $updated['image'] = $request->file('image')->store('profile-images');
        }
        User::where('id', session('activeId'))->update([
            'username' => $updated['username'],
            'address' => $updated['address'],
            'dob' => $updated['dob'],
            'image' => $updated['image'],
            'weight' => $updated['weight'],
            'height' => $updated['height'],
            'password' => bcrypt($updated['password'])
        ]);

        // $temp::except(['users'.'updated_at']);
        return redirect('/profile');
    }
}
