<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeInstructorController extends Controller
{
    public function showhomeform()
    {
        return view('home_instructor');
    }
}
