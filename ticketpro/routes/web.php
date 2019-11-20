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

Route::get('/','HomeController@getIndex')->name('home');


//TODO::group router
Route::get('/sport','HomeController@getSportEvent')->name('sport');
Route::get('/music','HomeController@getMusicEvent');
Route::get('/conference','HomeController@getConferenceEvent');



//Auth

Route::prefix('admin')->group(function(){
    Route::get('/register','Admin\AdminController@createAdmin')->name('admin.register');
    Route::post('/register','Admin\AdminController@storeAdmin')->name('admin.store');
    Route::get('/login','Admin\LoginController@login')->name('admin.auth.login');
    Route::post('/login','Admin\LoginController@loginAdmin')->name('admin.auth.loginadmin');
    Route::get('/logout','Admin\LoginController@LogoutAdmin')->name('admin.auth.logout');
});

