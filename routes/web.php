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
    return redirect()->route('login');
});

Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');

// Registration Routes...
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\RegisterController@register');

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::get('/view/{user}', 'HomeController@view')->name('adminView');

Route::post('/saveData', 'HomeController@saveData')->name('saveData');

Route::post('/upload/file/{file}', 'UploadController@file');
