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
Route::resource('student', 'StudentController');
// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/tution',function(){

    return view('pages.tutions');
});


Route::get('/example',function(){

    return view('pages.example');
});

Route::get('/profile',function(){

    $users = App\User::find(1)->edinfos();
        return $users;
});

//Route::post('/$id/accountcreate', 'UserController@store')->name('account.store');

//Route::post('/postaccountsetting', 'HomeController@saveProfileSetting')->name('postaccount');

// ============================ ADMIN ROUTES ======================================//

Route::get('/admin',function(){

    return view('admin.admin-pages.dashboard');
});

Route::get('/addcourse',function(){

    return view('admin.admin-pages.courses.addcourse');
});

Route::get('/editcourse',function(){
    // $course = Course::find($id);
    return view('admin.admin-pages.courses.editcourse');
});


// ============================ END ADMIN ROUTES ======================================//