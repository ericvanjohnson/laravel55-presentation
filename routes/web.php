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

Route::get('whoops', function() {
    // forget to import Carbon
    return Carbon::now();
});

Route::get('welcome', function () {
    return new App\Mail\UserWelcome;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
