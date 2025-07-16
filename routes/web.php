<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\MovieController;
use App\Http\Controllers\Admin\GenreController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Middleware\RoleMiddleware;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');

// User Routes
Route::prefix('admin/users')->as('admin.users.')->controller(UserController::class)->group(function () {
    Route::get('/', 'index')->name('index'); // Route name: admin.users.index (same as 'admin-users')
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::delete('/{userId}', 'delete')->name('delete');
    Route::get('/{userId}', 'edit')->name('edit');
    Route::put('/{userId}', 'update')->name('update'); 
   
});

// Genre Routes
Route::prefix('admin/genres')->as('admin.genres.')->controller(GenreController::class)->group(function () {
    Route::get('/', 'index')->name('index'); // Route name: admin.genres.index (same as 'admin-genres')
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::delete('/{genreId}', 'delete')->name('delete');
    Route::get('/{genreId}', 'edit')->name('edit');
    Route::put('/{genreId}', 'update')->name('update'); 
});

// Movie Routes
Route::prefix('admin/movies')
->as('admin.movies.')
->middleware((RoleMiddleware::class))
->controller(MovieController::class)->group(function () {
    Route::get('/', 'index')->name('index'); // Route name: admin.movies.index (same as 'admin-movies')
    Route::get('/create', 'create')->name('create');
    Route::post('/store', 'store')->name('store');
    Route::delete('/{movieId}', 'delete')->name('delete');
    Route::get('/{movieId}', 'edit')->name('edit');
    Route::put('/{movieId}', 'update')->name('update');  
});
