<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/account/login', [LoginController::class, 'index'])->name('account.login');
Route::post('/account/authenticate', [LoginController::class, 'authenticate'])->name('account.authenticate');
Route::get('/account/dashboard', [DashboardController::class, 'index'])->name('account.dashboard');