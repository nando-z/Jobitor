<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JobController::class, 'index'])->name('home');
Route::get('/search', SearchController::class);
Route::get('/tags/{tag:name}', TagController::class);

Route::get('/jobs', function () {
    return 'Jobs';
})->name('jobs');

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
