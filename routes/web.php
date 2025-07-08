<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\GenreController;

Route::get('/', [DashboardController::class, 'dashboard'])->name('admin');
Route::get('admin/genre', [GenreController::class, 'genre'])->name('admin.genre.index');

Route::get('admin/movie', [MovieController::class, 'movie'])->name('admin.movie.index');
Route::delete('admin/movie/{movieId}', [MovieController::class, 'delete'])->name('admin.movie.delete');