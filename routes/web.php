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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/sent', function () {
    return view('sent');
});
Route::get('/message', function () {
    return view('message');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/sent', 'HomeController@sent')->name('sent');
Route::get('/message', 'HomeController@message')->name('message');
