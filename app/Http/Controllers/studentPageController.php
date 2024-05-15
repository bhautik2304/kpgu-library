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
}
