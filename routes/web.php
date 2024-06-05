<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeInstructorController;
use Illuminate\Support\Facades\Route;



//RUTA LOGIN
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'loginStore'])->name('login.store');

//ruta instructor
Route::get('/homeInstructor', [HomeInstructorController::class, 'showhomeform'])->name('home');
