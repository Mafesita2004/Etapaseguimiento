<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeInstructorController extends Controller
{
    public function showhomeform()
    {
        return view('instructor.home_instructor');
    }
}
