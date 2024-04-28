<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;


Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/login', [LoginController::class, 'login'])->name('login');

