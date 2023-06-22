<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function index() {
        $userdata['gender'] = '';
        return view('/signup', compact('userdata'));
    }
    public function store(Request $request) {
        // return $request->file('image')->store('profile-images');
        // $validatedData = $request->all();
        $validated = $request->validate([
            'username' => 'required|min:5|max:255|unique:users',
            'address' => 'required|min:5|max:255',
            'dob' => 'required',
            'gender' => 'required',
            'weight' => 'required|min:0',
            'height' => 'required|min:0',
            'password' => 'required|min:8|max:255',
            'image' => 'required',
        ]);
        // dd($validated);
        // $validated['image'] = '/images/'.$validated['image'];
        // $temp = '';
        // $validated['image'] = $request->file('image')->store('profile-images');
        // $temp = $validated['image'];
        if($request->file('image')) {
            $validated['image'] = $request->file('image')->store('profile-images');
        }

        // return $temp;
        $validated['password'] = bcrypt($validated['password']);
        User::create($validated);
        $request->session()->flash('success', 'User created successfully! Please login.');
        return redirect('/login');
        // return $validated;
    }
}
