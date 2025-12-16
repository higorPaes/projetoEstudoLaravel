<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/', [Controller::class, 'homepage']);
Route::get('/cadastro', [Controller::class, 'cadastrar']);


/*
* Routes to user auth
* ===========================================
*/
Route::get('/login', [Controller::class, 'login']);
Route::post('/login', [DashboardController::class, 'auth'])->name('user.login');
Route::get('/dashboard', [DashboardController::class, 'index'])->name('user.dashboard');

