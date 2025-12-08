<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;

Route::get('/', [Controller::class, 'homepage']);
Route::get('/cadastro', [Controller::class, 'cadastrar']);


/*
* Routes to user auth
* ===========================================
*/
Route::get('/login', [Controller::class, 'login']);
Route::post('/login', [Controller::class, 'login'])->name('user.login');
