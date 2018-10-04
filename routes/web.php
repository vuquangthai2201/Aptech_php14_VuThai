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

Route::get('/users', 'UserController@index')->name('users.index'); // get all users from db

Route::get('/users/{user}', 'UserController@show')->name('users.show');

Route::delete('/users/{id}', 'UserController@destroy')->name('users.destroy');

Route::get('/users/{id}/edit', 'UserController@edit')->name('users.edit');

Route::put('/users/{id}', 'UserController@update')->name('users.update');

// Route::resource('/users', 'UserController');

// php artisan route:list
