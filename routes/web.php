<?php

use Illuminate\Support\Facades\Route;

Route::view('/' , 'page.index')
    ->name('home');

Route::view('/test' , 'page.index')
    ->name('test');

