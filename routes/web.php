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

Route::post('signup', 'UserController@signup');
Route::get('/', 'UserController@index')->name('/');
Route::post('signin', 'UserController@login');
Route::get('/dashboard/{auth}', 'UserController@dashboard')->name('dashboard');
Route::post('logout','UserController@logout');
Route::post('addben','BeneficiaryController@add');