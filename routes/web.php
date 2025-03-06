<?php

use Illuminate\Support\Facades\Route;

// Route::get('/' , 'job.index')
//     ->name('home');



// Route::get('/test' , 'job.index')
//     ->name('test');



Route::get('/',[\App\Http\Controllers\JobController::class , 'index'])
    ->name('home');