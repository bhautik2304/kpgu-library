<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class studentPageController extends Controller
{
    //

    public function home()
    {
        return view('home-library');
    }

    public function login()
    {
        return view('auth.students.login');
    }
    public function register()
    {
        return view('auth.students.register');
    }
}
