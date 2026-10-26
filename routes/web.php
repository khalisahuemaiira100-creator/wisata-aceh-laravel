<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/destinasi', function () {
    return view('destinasi');
});

Route::get('/peta', function () {
    return view('peta');
});

Route::get('/rekomendasi', function () {
    return view('rekomendasi');
});

Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login');

Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])
    ->name('logout');