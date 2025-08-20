<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;

Route::get('/', [DashboardController::class, 'Home']);
Route::get('/register', [FormController::class, 'Register']);
Route::post('/welcome', [FormController::class, 'Welcome']);