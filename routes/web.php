<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Welcome', function () {
    return view('mtaaweb.about_master');   // The welcome page
})->name('about_master.route');