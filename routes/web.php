<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function(){
    return view('auth.login');
});

Route::get('/register', function(){
    return view('auth.register');
});

Route::post('/register',RegisterController::class);
//Route::post('/login-user',LoginController);