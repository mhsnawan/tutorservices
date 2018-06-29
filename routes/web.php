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

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::resource('account', 'UserController');
Route::resource('educationalinfo', 'EducationalInfoController');
// Route::get('/home', 'HomeController@index')->name('home');

//Route::post('/$id/accountcreate', 'UserController@store')->name('account.store');

//Route::post('/postaccountsetting', 'HomeController@saveProfileSetting')->name('postaccount');
