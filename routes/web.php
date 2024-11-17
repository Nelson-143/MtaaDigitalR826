<?php

use Illuminate\Support\Facades\Route;
// the mtaaweb route 
Route::get('/', function () {
    return view('mtaaweb.welcome');
});

Route::get('/Contact', function () {
    return view('mtaaweb.contact');       // The About  page
})->name('contact.route');


Route::get('/FAQ', function () {
    return view('mtaaweb.faq');   // The welcome page
})->name('faq.route');

Route::get('/Welcome', function () {
    return view('mtaaweb.welcome');       // The About  page
})->name('welcome.route');

Route::get('/Services', function () {
    return view('mtaaweb.service');       // The About  page
})->name('service.route');

// auths  trial routes for View port
Route::get('/Login', function () {
    return view('auths.login');       // The About  page
})->name('login.route');

Route::get('/Register', function () {
    return view('auths.register');       // The About  page
})->name('register.route');

Route::get('/Passwordreset', function () {
    return view('auths.passwordreset');       // The About  page
})->name('passwordreset.route');