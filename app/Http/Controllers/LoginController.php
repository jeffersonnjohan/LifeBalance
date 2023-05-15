<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(Request $request) {
        return view('/login');
    }

    public function authenticate(Request $request): RedirectResponse{
        $credentials = $request->all();
        unset($credentials['_token']);
        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // $id = User::where('username', $credentials['username'])->pluck('id')->first();
            // $request->session()->put('activeId', $id);
            return redirect()->intended('/home');
        }
        return back()->with('loginError', 'Login failed!');
        // return $credentials;
    }
}
