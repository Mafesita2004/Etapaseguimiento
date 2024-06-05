<?php

namespace App\Http\Controllers;

use App\Models\Homeaprendiz;
use Illuminate\Http\Request;

class HomeaprendizController extends Controller
{
    public function showHomeaprendizForm()
    {

        return view('aprendiz.home');
    }
}
