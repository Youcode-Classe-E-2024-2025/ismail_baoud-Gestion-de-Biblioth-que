<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\bookController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\profileController;

Route::get('/', [dashboardController::class , 'index']);
Route::get('/signin', [authController::class , 'signin'])
    ->name('signin');
Route::get('/signup', [authController::class , 'signup']);
Route::get('/dashboard', [dashboardController::class , 'index'])
->name('home');
Route::get('/profile', [profileController::class , 'index'])
->name('profile');
Route::post('/store', [authController::class , 'store'])
    ->name('store');
Route::post('/login/validate', [authController::class , 'login_validate'])
    ->name('login.validate');
