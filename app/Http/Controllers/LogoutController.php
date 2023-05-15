<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    public function logout(Request $request) {
        // ilangin session('activeId')
        // $request->session()->pull('activeId');

        // if(!session('activeId')) {
        //     // kalo sudah hilang
        //     return view('login');
        // } else {
        //     // kalo masih ada
        //     return view('profile');
        // }

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
