<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');

Route::resource('items', ItemController::class)
    ->middleware('auth');

Route::get('/login', [LoginController::class, 'create'])
    ->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);