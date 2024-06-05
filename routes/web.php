<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeInstructorController;

Route::get('/', function () {
    return view('welcome');
});
//RUTA LOGIN
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'loginStore'])->name('login.store');

//
Route::get('/Instructor/home', [HomeInstructorController ::class, 'showhomeform'])->name('home_instructor');
Route::post('/Instructor/home', [HomeInstructorController::class, 'homeStore'])->name('home_instructor.store');
