<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function deleteActiveId(Request $request) {
        // ilangin session('activeId')
        $request->session()->pull('activeId');

        if(!session('activeId')) {
            // kalo sudah hilang
            return view('login');
        } else {
            // kalo masih ada
            return view('profile');
        }
    }
}
