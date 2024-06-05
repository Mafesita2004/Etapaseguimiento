<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//RUTA LOGIN
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'loginStore'])->name('login.store');

//Ruta Registro de aprendizaje que hace el Super admin
use App\Http\Controllers\ApprenticeRegistrationController;
Route::get('/apprentice', [ApprenticeRegistrationController::class, 'create'])->name('apprentice.create');
Route::post('/apprentices', [ApprenticeRegistrationController::class, 'store'])->name('apprentice.store');
Route::get('/apprentice', [ApprenticeRegistrationController::class, 'index'])->name('apprentice.index');
