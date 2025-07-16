<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\GenreController;
use App\Http\Controllers\admin\MovieController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Middleware\TestMiddleware;

Route::get('/', [DashboardController::class, 'dashboard'])->name('admin.dashboard.index');

Route::prefix('/admin/genre')->as('admin.genre.')->controller(GenreController::class)->group(function () {
    Route::get('/', 'index')->name('index'); // table get
    Route::get('/create', 'create')->name('create'); // form dekhauna get
    Route::post('/', 'store')->name('store'); // form ko data store, post
    Route::get('/{genreId}', 'edit')->name('edit'); // get info before editing, get
    Route::delete('/{genreId}', 'delete')->name('delete'); // delete

});

Route::prefix('admin/movie')->as('admin.movie.')->middleware(TestMiddleware::class)->controller(MovieController::class)->group(function () {
    Route::get('/', 'index')->name('index'); // table get
    Route::get('/create', 'create')->name('create'); // form dekhauna get
    Route::post('/', 'store')->name('store'); // form ko data store, post
    Route::get('/{movieId}', 'edit')->name('edit'); // get info before editing, get
    Route::put('/{movieId}', 'update')->name('update'); // update the edited changes, PUT
    Route::delete('/{movieId}', 'delete')->name('delete'); // delete
});

Route::prefix('/admin/user')->as('admin.user.')->controller(UserController::class)->group(function () {
    Route::get('/', 'index')->name('index'); // table get
    Route::get('/create', 'create')->name('create'); // form dekhauna get
    Route::post('/', 'store')->name('store'); // form ko data store, post
    Route::get('/{userId}', 'edit')->name('edit'); // get info before editing, get
    Route::delete('/{userId}', 'delete')->name('delete'); // delete

});
