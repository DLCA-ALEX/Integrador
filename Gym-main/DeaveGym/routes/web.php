<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\alumnoscontroller;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\UsuariosController;

//LOGIN ROUTES
Route::get('/home', function () {
    return view('view1');});
Route::get('/', function () { return view('user.home' );})->middleware('auth');
 Route::get('/register', [RegisterController::class, 'create'])
 ->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])
->name('register.store');
 Route::get('/login', [SessionsController::class, 'create'])
->name('login.index');
Route::post('/login', [SessionsController::class, 'store'])
->name('login.store');
Route::get('/logout', [SessionsController::class, 'destroy'])
->name('login.destroy');
Route::get('view1', function() { return view('view1'); })->name('view1');



