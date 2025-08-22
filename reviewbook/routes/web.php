<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\GenreController;

Route::get('/', [DashboardController::class, 'Home']);
Route::get('/register', [FormController::class, 'Register']);
Route::post('/welcome', [FormController::class, 'Welcome']);

// CRUD Genre

// C => Create Data
Route::get('/genre/create', [GenreController::class, 'create']);
Route::post('/genre', [GenreController::class, 'store']);

// R => Read Data
Route::get('/genre', [GenreController::class, 'index']);
Route::get('/genre/{id}', [GenreController::class, 'show']);

// U => Update Data
Route::get('/genre/{id}/edit', [GenreController::class, 'edit']);
Route::put('/genre/{id}', [GenreController::class, 'update']);

// D => Delete Data
Route::delete('/genre/{id}', [GenreController::class, 'destroy']);