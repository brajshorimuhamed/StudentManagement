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

Route::get('/account', 'AccountController@index');
Route::get('/account/register', 'AccountController@register');

Route::post('/account', 'AccountController@checkLogin');
Route::post('/account/register', 'AccountController@checkRegister');

Route::get('/account/logout', 'AccountController@logout');

Route::resource('/students', 'StudentController');
//Route::get('/students', 'StudentController@index');
//Route::get('/students/create', 'StudentController@create');
//Route::get('/students/{studentId}', 'StudentController@show');
