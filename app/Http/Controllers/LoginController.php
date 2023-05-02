<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request) {
        // $credentials = $request->validate([
        //     'email',
        //     'password'
        // ]);
        $credentials = $request->all();
        unset($credentials['_token']);
        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $id = User::where('username', $credentials['username'])->pluck('id');
            echo $id->first();
            return $credentials;
            // return redirect()->intended('/home');
        }
        return back()->with('loginError', 'Login failed!');
        // return $credentials;
    }
}
