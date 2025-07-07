<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\GenreController;

Route::get('/', [DashboardController::class, 'dashboard'])->name('admin');
Route::get('/managemovie', [MovieController::class, 'movie'])->name('movie');
Route::get('/managegenre', [GenreController::class, 'genre'])->name('genre');