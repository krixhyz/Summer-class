<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\MovieController;
use App\Http\Controllers\Admin\GenreController;
use App\Http\Controllers\Admin\UserController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/admin/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');

Route::get('/admin/users', [UserController::class, 'index'])->name('admin-users');
Route::get('/admin/users/create', [UserController::class, 'create'])->name('admin.users.create');
Route::post('/admin/users/store', [UserController::class, 'store'])->name('admin.users.store');
Route::delete('/admin/users/{userId}', [UserController::class, 'delete'])->name('admin.users.delete');
Route::patch('/admin/users/{update}', [UserController::class, 'update'])->name('admin.users.update');



Route::get('/admin/genres', [GenreController::class, 'index'])->name('admin-genres');
Route::get('/admin/genres/create', [GenreController::class, 'create'])->name('admin.genres.create');
Route::post('/admin/genres/store', [GenreController::class, 'store'])->name('admin.genres.store');
Route::delete('/admin/genres/{genreId}', [GenreController::class, 'delete'])->name('admin.genres.delete');
Route::patch('/admin/genres/{genreId}', [GenreController::class, 'update'])->name('admin.genres.update');




Route::get('/admin/movies', [MovieController::class, 'index'])->name('admin-movies');
Route::get('/admin/movies/create', [MovieController::class, 'create'])->name('admin.movies.create');
Route::post('/admin/movies/store', [MovieController::class, 'store'])->name('admin.movies.store');
Route::delete('/admin/movies/{movieId}', [MovieController::class, 'delete'])->name('admin.movies.delete');