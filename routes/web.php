<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\MovieController;
use App\Http\Controllers\admin\GenreController;

Route::get('/', [DashboardController::class, 'dashboard'])->name('admin.dashboard.index');
Route::get('admin/genre/index', [GenreController::class, 'genre'])->name('admin.genre.index');
Route::get('admin/genre/create', [GenreController::class, 'create'])->name('admin.genre.create');

Route::get('admin/movie/index', [MovieController::class, 'movie'])->name('admin.movie.index');
Route::get('/admin/movie/create', [MovieController::class, 'create'])->name('admin.movie.create');
Route::delete('admin/movie/{movieId}', [MovieController::class, 'delete'])->name('admin.movie.delete');
