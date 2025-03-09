<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisterUserController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JobController::class, 'index'])->name('home');
Route::get('/search', SearchController::class);
Route::get('/tags/{tag:name}', TagController::class);

// Create Job Auth
Route::middleware('auth')->group(function () {
    Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create');
    Route::post('/jobs', [JobController::class, 'store'])->name('jobs.store');
});

Route::get('/careers', function () {
    return 'Careers';
})->name('careers');

Route::get('/salaries', function () {
    return 'Salaries';
})->name('salaries');

Route::get('/companies', function () {
    return 'Companies';
})->name('companies');
Route::get('/create', function () {
    return 'Create';
})->name('create');

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisterUserController::class, 'store'])->name('register');

    // login
    Route::get('/login', [SessionController::class, 'create'])->name('login');
    Route::post('/login', [SessionController::class, 'store'])->name('login');
});
Route::post('/logout', [SessionController::class, 'destroy'])->name('logout')
    ->middleware('auth');
