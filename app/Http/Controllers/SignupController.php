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
        $validatedData = $request->all();
        // $validatedData['image'] = '/images/'.$validatedData['image'];
        // $temp = '';
        // $validatedData['image'] = $request->file('image')->store('profile-images');
        // $temp = $validatedData['image'];
        if($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('profile-images');
        }

        dd($validatedData);

        // return $temp;
        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create($validatedData);
        $request->session()->flash('success', 'User created successfully! Please login.');
        return redirect('/login');
        // return $validatedData;
    }
}
