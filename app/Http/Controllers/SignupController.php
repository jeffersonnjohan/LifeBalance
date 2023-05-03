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
        $validatedData = $request->all();
        $validatedData['image'] = '/images/'.$validatedData['image'];
        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create($validatedData);
        $request->session()->flash('success', 'User created successfully! Please login.');
        return redirect('/login');
        // return $validatedData;
    }
}
