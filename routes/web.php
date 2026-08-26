<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard')
    ->middleware('auth');

Route::resource('items', ItemController::class)
    ->middleware('auth');

// Make sure login page only shows when user is not logged in
Route::middleware('guest')->group(function() {
    Route::get('/login', [LoginController::class, 'create'])
    ->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);
});