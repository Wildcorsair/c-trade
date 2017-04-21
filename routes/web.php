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
Route::get('dashboard/users', ['as' => 'users', 'uses' => 'DashboardController@users']);
Route::get('dashboard/users/create', ['as' => 'users.create', 'uses' => 'DashboardController@createUser']);
Route::post('dashboard/users/store', ['as' => 'users.store', 'uses' => 'DashboardController@storeUser']);
Route::get('dashboard/users/{id}/edit', ['as' => 'users.edit', 'uses' => 'DashboardController@editUser'])->where('id', '[0-9]+');
Route::put('dashboard/users/{id}', ['as' => 'users.update', 'uses' => 'DashboardController@updateUser'])->where('id', '[0-9]+');

Route::get('about', 'PageController@about');
Route::get('contact', ['as' => 'mailUs', 'uses' => 'PageController@contact']);