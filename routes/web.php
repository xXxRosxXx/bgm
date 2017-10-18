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
    return view('welcome')-> with('title', 'BGM');
})->name('home');

Route::get('/register', 'RegistrationController@create');
Route::get('/login', 'SessionController@create');
Route::get('/users', 'UserController@list');

Route::post('/register', 'RegistrationController@store');
Route::post('/login', 'SessionController@store');