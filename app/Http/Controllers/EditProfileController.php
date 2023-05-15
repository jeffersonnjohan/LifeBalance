<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class EditProfileController extends Controller
{
    public function index() {
        $id = Auth::user()->id;
        $userdata = User::where('id', $id)->first();
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
        } else {
            $updated['image'] = $updated['oldImage'];
        }

        $id = Auth::user()->id;
        User::where('id', $id)->update([
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

    public function upt() {
        return redirect('/profile');
    }
}
