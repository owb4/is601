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

Route::get('/welcome', function () {
    return view('pages.welcome');
});

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/signup', function () {
    return view('pages.signup');
});

Route::get('/signin', function () {
    return view('pages.signin');
});

Route::post('/signin', function () {
    return view('pages.message-list');
});

Route::get('/logout', function () {
    return view('pages.index');
});

Route::get('/message-list', function () {
    return view('pages.message-list');
});

Route::get('/message-1', function () {
    return view('pages.message-1');
});
Route::get('/message-2', function () {
    return view('pages.message-2');
});
Route::get('/message-3', function () {
    return view('pages.message-3');
});