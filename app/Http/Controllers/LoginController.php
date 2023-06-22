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
        $validated =  $request->validate([
            'username' => 'required|min:5|max:255',
            'password' => 'required|min:8|max:255'
        ]);
        // $credentials = $request->all();
        unset($validated['_token']);
        if(Auth::attempt($validated)) {
            $request->session()->regenerate();
            // $id = User::where('username', $credentials['username'])->pluck('id')->first();
            // $request->session()->put('activeId', $id);
            return redirect()->intended('/home');
        }
        return back()->with('loginError', 'Incorrect username or password');
        // return $credentials;
    }
}
