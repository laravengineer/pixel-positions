<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JobController::class, 'index'])->name('home');

Route::get('/search', SearchController::class)->name('search');
Route::get('/tags/{tag:name}', TagController::class)->name('tag');

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('user-form');
    Route::post('/register', [RegisteredUserController::class, 'store'])->name('user-register');

    Route::get('/login', [SessionController::class, 'create'])->name('login-form');
    Route::post('/login', [SessionController::class, 'store'])->name('login');
});

Route::delete('/logout', [SessionController::class, 'destroy'])->middleware('auth');
