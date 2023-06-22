<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class EditProfileController extends Controller
{
    public function index() {
        $id = Auth::user()->id;
        $userdata = User::where('id', $id)->first();
        return view('/editprofile', compact('userdata'));
    }

    public function updateData(Request $request) {
        // $updated = $request->all();
        $id = Auth::user()->id;
        $validated = $request->validate([
            'username' => ['required','min:5','max:255', Rule::unique('users', 'username')->ignore($id)],
            'address' => 'required|min:5|max:255',
            'dob' => 'required',
            'gender' => 'required',
            'weight' => 'required|min:0',
            'height' => 'required|min:0',
            'password' => 'required|min:8|max:255',
            'image' => '',
            'oldImage' => ''
        ]);
        // unset($updated[count($updated) - 1]);
        if($request->file('image')) {
            if($validated['oldImage']) {
                Storage::delete($validated['oldImage']);
            }
            $validated['image'] = $request->file('image')->store('profile-images');
        } else {
            $validated['image'] = $validated['oldImage'];
        }

        User::where('id', $id)->update([
            'username' => $validated['username'],
            'address' => $validated['address'],
            'dob' => $validated['dob'],
            'image' => $validated['image'],
            'weight' => $validated['weight'],
            'height' => $validated['height'],
            'password' => bcrypt($validated['password'])
        ]);

        // $temp::except(['users'.'updated_at']);
        return redirect('/profile');
    }

    public function upt() {
        return redirect('/profile');
    }
}
