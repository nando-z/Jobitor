<?php

use Illuminate\Support\Facades\Route;

// Route::get('/' , 'job.index')
//     ->name('home');

// Route::get('/test' , 'job.index')
//     ->name('test');

Route::get('/', [\App\Http\Controllers\JobController::class, 'index'])
    ->name('home');

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

require_once 'auth.php';
