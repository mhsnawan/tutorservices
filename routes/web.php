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
use App\Teacher;

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

// Route::get('/personalinfo',function(){
//     return view('tportal.tportal-pages.personalinfo');
// });
// Route::get('/educationalinfo',function(){
//     return view('tportal.tportal-pages.educationalinfo');
// });
Route::get('/tutor',function(){
    return view('tportal.tportal-pages.tportalpage');
});
Route::get('/availability',function(){
    return view('tportal.tportal-pages.availability');
});
// Route::get('/certification',function(){
//     return view('tportal.tportal-pages.certification');
// });
Route::get('/current-tutions',function(){
    return view('tportal.tportal-pages.current-tutions');
});
// Route::get('/experience',function(){
//     return view('tportal.tportal-pages.experience');
// });
Route::get('/rate',function(){
    $userid = Auth::user()->id;
    $rate = Teacher::find($userid);
    return view('tportal.tportal-pages.rate')->with(compact('rate'));
});

Route::post('/rate',function(Request $request){
    echo $request;
    // $userid = Auth::user()->id;
    // $rate = Teacher::find($userid);
    // return view('tportal.tportal-pages.rate')->with(compact('rate'));
});

Route::get('/uploads',function(){
    return view('tportal.tportal-pages.uploads');
});
Route::get('/courses',function(){
    return view('tportal.tportal-pages.courses');
});
Route::get('/tprofile',function(){

    return view('tportal.tprofile-pages.tprofile-page');
 });

 // ============================ student-portal ROUTES ======================================//
Route::get('/scourses',function(){

    return view('sportal.sportal-pages.courses');
});
Route::get('/student',function(){

    return view('sportal.sportal-pages.sportalpage');
});
Route::get('/seducationalinfo',function(){

    return view('sportal.sportal-pages.educationalinfo');
});
Route::get('/peertopeer',function(){

    return view('sportal.sportal-pages.peertopeer');
});
Route::get('/spersonalinfo',function(){

    return view('sportal.sportal-pages.personalinfo');
});
Route::get('/suploads',function(){

    return view('sportal.sportal-pages.uploads');
});
