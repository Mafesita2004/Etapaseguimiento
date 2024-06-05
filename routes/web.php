<?php

use App\Http\Controllers\HomeaprendizController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//RUTA LOGIN
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'loginStore'])->name('login.store');

//RUTA HOME APRENDIZ
Route::get('/homeaprendiz', [HomeaprendizController::class, 'showHomeaprendizForm'])->name('Homeaprendiz');
Route::post('/homeaprendiz', [HomeAprendizController::class, 'homeaprendizStore'])->name('homeaprendiz.store');


