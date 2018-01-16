<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
|--------------------------------------------------------------------------
| Home Routes
|--------------------------------------------------------------------------
|
*/

Route::get('/', function () {
    return view('pages.home');
})->name('home');

/*
|--------------------------------------------------------------------------
| User Access
|--------------------------------------------------------------------------
|  
*/

Route::get('login', function () {
    return view('pages.users.login');
})->name('login');

Route::get('logout', function () {
    return view('pages.users.logout');
});

Route::get('register', function () {
    return view('pages.users.register');
})->name('register');


Route::get('forgot-password', function () {
    return view('pages.users.forgot-pw');
})->name('forgot-pw');


/*
|--------------------------------------------------------------------------
| Admin Control
|--------------------------------------------------------------------------
|
*/