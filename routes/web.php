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

Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', 'HomeController@index')->name('home');

    // ADMIN
    Route::get('/admin/propertyManagement/', 'PropertyController@index');
    Route::get('/admin/propertyManagement/create', 'PropertyController@create');

    // PROFILE
    Route::get('/profile', 'ProfileController@index');
});
