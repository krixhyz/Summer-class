<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\RegisterController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\MovieController;
use App\Http\Controllers\Admin\GenreController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Middleware\AuthMiddleware;

// Public Route
Route::get('/', [HomeController::class, 'index'])->name('home');

// Admin Auth Routes
Route::prefix('admin/register')
    ->as('admin.register.')
    ->controller(RegisterController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('store');
    });

Route::prefix('admin/login')
    ->as('admin.login.')
    ->controller(LoginController::class)->group(function () {
        Route::get('/verification/{token}', 'verification')->name('verification');
        Route::get('/', 'index')->name('index');
        Route::post('/', 'check')->name('check');
        Route::post('/', 'check')->name('check');
 

    });


    Route::post('/admin/logout', [LoginController::class, 'logout'])->name('admin.logout');

// Protected Admin Routes
Route::prefix('admin')
    ->middleware(AuthMiddleware::class)
    ->group(function () {

        Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard.index');

        Route::prefix('movies')
            ->as('admin.movies.')
            ->controller(MovieController::class)
            ->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/create', 'create')->name('create');
                Route::post('/', 'store')->name('store');
                Route::get('/{movieId}', 'edit')->name('edit');
                Route::put('/{movieId}', 'update')->name('update');
                Route::delete('/{movieId}', 'delete')->name('delete');
            });

        Route::prefix('users')
            ->as('admin.users.')
            ->controller(UserController::class)
            ->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::delete('/{userId}', 'delete')->name('delete');
                Route::get('/{userId}', 'edit')->name('edit');
                Route::put('/{userId}', 'update')->name('update');
            });

        Route::prefix('genres')
            ->as('admin.genres.')
            ->controller(GenreController::class)
            ->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('/create', 'create')->name('create');
                Route::post('/store', 'store')->name('store');
                Route::delete('/{genreId}', 'delete')->name('delete');
                Route::get('/{genreId}', 'edit')->name('edit');
                Route::put('/{genreId}', 'update')->name('update');
            });
    });
