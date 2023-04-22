<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $arrUser = ["Daniel"];

        return view('/home', compact('arrUser'));
    }
}
?>
