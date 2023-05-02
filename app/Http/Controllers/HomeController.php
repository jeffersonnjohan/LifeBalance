<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $name = 'daniel';

        return view('/home_community/home', compact('name'));
    }
}
?>
