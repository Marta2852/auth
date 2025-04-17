<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\http\Controllers\SessionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [RegisterController::class, 'create'])->middleware("guest");
Route::post('/register', [RegisterController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);
Route::get('/login', [SessionController::class, 'create'])->name("login");
Route::post('/login', [SessionController::class, 'store']);

Route::get('/mid', [SessionController::class, 'mid'])->middleware("auth");


