<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\SearchController;
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

require_once __DIR__.'/auth.php';
