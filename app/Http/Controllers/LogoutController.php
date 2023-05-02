<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function deleteActiveId(Request $request) {
        // $temp = session('activeId');
        $request->session()->pull('activeId');
        // echo $temp;
        // return $request->all();
        return view('login');
    }
}
