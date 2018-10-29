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
use App\User;
use App\Course;
use App\CourseTeacher;

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
Route::resource('post-tution', 'CourseTeacherController');
Route::resource('enroll', 'CourseStudentTeacherController');
Route::resource('posts', 'PostController');
Route::resource('blog', 'BlogController');
Route::get('/search/{queryString}', 'CourseTeacherController@search');
// Route::get('/home', 'HomeController@index')->name('home');


Route::get('/example',function(){
    return view('pages.example');
});

Route::get('/profile',function(){
    $users = App\User::find(1)->edinfos();
    return $users;
});


// ============================ ADMIN ROUTES ======================================//

Route::get('/admin',function(){
    return view('admin.admin-pages.dashboard');
});

Route::get('/addcourse',function(){
    return view('admin.admin-pages.courses.addcourse');
});


Route::get('/editcourse',function(){
    return view('admin.admin-pages.courses.editcourse');
});

Route::get('/addpost',function(){
    return view('admin.admin-pages.posts.add-post');
});


// ============================ END ADMIN ROUTES ======================================//


Route::get('/tutor',function(){
    return view('tportal.tportal-pages.tportalpage');
});
Route::get('/availability',function(){
    $id = Auth::user()->id;
    $user = User::find($id);
    return view('tportal.tportal-pages.availability')->with(compact(['user']));
});

Route::get('/current-tutions',function(){
    return view('tportal.tportal-pages.current-tutions');
});


Route::get('/rate',function(){
    $id = Auth::user()->id;
    $user = User::find($id);
    $rate = User::find($id)->teacher;
    return view('tportal.tportal-pages.rate')->with(compact(['rate', 'user']));
});

Route::post('/rate',function(Request $request){
    echo $request;
});

Route::get('/courses',function(){
    return view('tportal.tportal-pages.courses');
});
Route::get('/tprofile',function(){
    $id = Auth::user()->id;
    $user= User::find($id);
    $teacher = User::find($id)->teacher;
    $edinfos = User::find($id)->edinfos;
    $certifications = User::find($id)->certifications;
    $experiences = User::find($id)->experiences;
    return view('tportal.tprofile-pages.tprofile-page')->with(compact(['user', 'edinfos', 'certifications', 'experiences', 'teacher']));
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

// ============================ Blog ROUTES ======================================//
// Route::get('/blog',function(){

//     return view('blog.blog-pages.blog-page');
// });
Route::get('/forum',function(){

    return view('blog.blog-pages.blog-singlepost');
});

// Route::get('/posts',function(){

//     return view('admin.admin-pages.posts.add-post');
// });

//////////////////////////STUDENT ACCOUNT////////////////////////////
Route::prefix('student')->group(function () {
    Route::get('account', 'StudentController@account')->name('account');
    Route::get('educationalinfo', 'StudentController@education')->name('education');
});

//Route::get('ajax', 'ConversationsController@ajax')->name('ajax');

Route::get('/mudassar', function(){
    return view('pages.adduser');
});
