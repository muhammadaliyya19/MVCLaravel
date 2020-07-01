<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home_Controller extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function register()
    {
        return view('form');
    }

    public function welcome()
    {
        return view('welcome');
    }
}
