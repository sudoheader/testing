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
    // return view('welcome');
    return view('button');
});

Route::get('/{studentName}', function($studentName) {
  return "Welcome to the laravel project! :" . $studentName;
});

Route::get('/users/helloworld', 'UserController@helloworld');
Route::post('users/form', 'UserController@newUser');
Route::get('/users/{id}', 'UserController@multiplyByTwo');