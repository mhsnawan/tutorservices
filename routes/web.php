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
Route::resource('edinfo', 'EdInfoController');
Route::resource('certification', 'CertificationController');
Route::resource('experience', 'ExperienceController');
Route::resource('course', 'CourseController');
Route::resource('teacher', 'TeacherController');
// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/tution',function(){

    return view('pages.tution');
});

Route::get('/profile',function(){

    $users = App\User::find(1)->edinfos();
        return $users;
});

//Route::post('/$id/accountcreate', 'UserController@store')->name('account.store');

//Route::post('/postaccountsetting', 'HomeController@saveProfileSetting')->name('postaccount');
