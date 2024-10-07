<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// Route::view('about', 'about');
// Route::view('home', 'home');
// Route::view('noaccess', 'noaccess');

Route::get('users', [UserController::class,'index']);