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

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('dashboard', ['as' => 'dashboard', 'uses' => 'DashboardController@index']);

Route::get('about', 'PageController@about');
Route::get('contact', ['as' => 'mailUs', 'uses' => 'PageController@contact']);