<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/register',RegisterController::class);
Route::get('/login', [LoginController::class, 'showLogin']);
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', function(){
    return view('auth.register');
});

//Role views
Route::middleware(['auth','checkrole:inputter'])->group(function () {
    //untuk inputter
    Route::get('/inputter', function(){
        return view('inputter.home');
    });
    
});

Route::middleware(['auth','checkrole:monitor'])->group(function () {
    //untuk monitor
    Route::get('/monitor', function(){
        return view('monitor.dashboard');
    });

    Route::get('/monitor/kategori', function() {
        return view('monitor.kategori');
    });

    Route::get('/monitor/laporan', function () {
        return view('monitor.laporan');
    });
    
});
