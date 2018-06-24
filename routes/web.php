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

Route::get('/welcome', 'PagesController@welcome')->name('welcome');

Route::get('/', 'PagesController@index')->name('index');

Route::get('/about', 'PagesController@about')->name('about');

Route::get('/contact', 'PagesController@contact')->name('contact');
Route::post('/contact', 'PagesController@storecontact')->name('storecontact');
Route::get('/thanks/{name}', 'PagesController@thanks')->name('thanks');

Route::get('/signup', 'PagesController@signup')->name('signup');

Route::get('/signin', 'PagesController@signin')->name('signin');

Route::get('/logout', 'PagesController@logout')->name('logout');

Route::get('/message-list', 'PagesController@messagelist')->name('message-list');

Route::get('/message-1', 'PagesController@message1')->name('message-1');

Route::get('/message-2', 'PagesController@message2')->name('message-2');

Route::get('/message-3', 'PagesController@message3')->name('message-3');