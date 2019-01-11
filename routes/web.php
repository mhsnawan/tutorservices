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
use Illuminate\Support\Facades\Input;
use App\Teacher;
use App\User;
use App\Course;
use App\CourseTeacher;
use App\Degree;
use App\SubDegree;
use App\EdInfo;
use App\ConversationUser;
use App\Messages;
use App\Conversations;
use App\CourseStudentTeacher;
use App\Student;
use App\Post;
use App\Experience;
use App\Certification;
use App\Reviews;
use Illuminate\Http\Request;

Route::get('/', function () {
    $blogs = Post::all()->take(4);
    $course = CourseTeacher::all()->take(6);
    return view('welcome')->with(compact('blogs', 'course'));
});

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::resource('account', 'UserController');
Route::resource('edinfo', 'EdInfoController');
Route::resource('teacher', 'TeacherController');
Route::resource('student', 'StudentController');
Route::resource('enroll', 'CourseStudentTeacherController');
Route::resource('blog', 'BlogController');
Route::resource('reviews', 'ReviewsController');
Route::get('/search/{queryString}', 'CourseTeacherController@search');
// Route::get('/home', 'HomeController@index')->name('home');

Route::post('uprofile', function(Request $request){
    $input = $request->all();
        if($request->profile_img != null){
           $fileName =  $request->profile_img->getClientOriginalName();
            $path = $request->file('profile_img')->storeAs('public/uploads',$fileName);
            $second =  $request->file('profile_img')->storeAs('uploads',$fileName);
            $input['profile_img'] = $second;
        }
        $user = User::findOrFail($input['id']);
        $user->fill($input)->save();
        return redirect('profile');
})->name('uprofile');

Route::post('ucover', function(Request $request){
    $input = $request->all();
        if($request->cover_img != null){
           $fileName =  $request->cover_img->getClientOriginalName();
            $path = $request->file('cover_img')->storeAs('public/uploads',$fileName);
            $second =  $request->file('cover_img')->storeAs('uploads',$fileName);
            $input['cover_img'] = $second;
        }
        $user = User::findOrFail($input['id']);
        $user->fill($input)->save();
        return redirect('profile');
})->name('ucover');

Route::get('/example',function(){
    return view('pages.example');
});

// Route::get('/profile',function(){
//     $users = App\User::find(1)->edinfos();
//     return $users;
// });


// ====================================== ADMIN ROUTES ==================================================//
Route::group(['prefix'=>'admin', 'middleware'=>'auth:admin'],function(){
    // Route::get('login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    // Route::post('login', 'Auth\AdminLoginController@login')->name('admin.submit');
    Route::resource('posts', 'PostController');
    Route::resource('course', 'CourseController');
    Route::resource('degree', 'DegreeController');
    Route::resource('subdegree', 'SubDegreeController');
    Route::resource('city', 'CitiesController');

    /////////////////////STUDENTS/////////////////////
    Route::get('/students',function(){
        $students =User::all()->where('role', '1');
        return view('admin.admin-pages.students.students')->with(compact('students'));
    })->name('admin-students');

    Route::get('/editstudent/{id}',function($id){
        $students = User::find($id);
        return view('admin.admin-pages.students.editstudent')->with(compact('students'));
    });

    Route::put('/updatestudent/{id}',function(Request $request, $id){
        $user = User::find($id);
        $input = $request->all();
        $user->fill($input)->save();
        return redirect('admin/students');
    });

    Route::delete('/deletestudent/{id}',function($id){
        $user=User::find($id);
        if (!is_null($user)){
            $user->delete();
            return redirect('admin/students');
        }
    });

    Route::get('verify-student/{id}', function($id){
        $user = User::find($id);
        $user->verified = 1;
        $user->save();
        return redirect('/admin/students');
    })->name('verify.student');
    /////////////////STUDENT ROUTE END/////////////////////

    /////////////////TEACHER ROUTE//////////////////////////
    Route::get('/tutors',function(){
        $teachers =User::all()->where('role', '2');
        return view('admin.admin-pages.teachers.teachers')->with(compact('teachers'));
    })->name('admin-tutors');

    Route::get('/edit-tutor/{id}',function($id){
        $teachers = User::find($id);
        return view('admin.admin-pages.teachers.editteacher')->with(compact('teachers'));
    })->name('admin-tutor.edit');

    Route::put('/update-tutor/{id}',function(Request $request, $id){
        $user = User::find($id);
        $input = $request->all();
        $user->fill($input)->save();
        return redirect('/admin/tutors');
    })->name('admin-tutor.update');

    Route::delete('/delete-tutor/{id}',function($id){
        $user=User::find($id);
        if (!is_null($user)) {
            $user->delete();
            return redirect('/admin/tutors');
        }
    })->name('admin-tutor.destroy');

    Route::get('verify-tutor/{id}', function($id){
        $user = User::find($id);
        $user->verified = 1;
        $user->save();
        return redirect('/admin/tutors');
    })->name('verify.tutor');
    ////////////////////////TEACHER ROUTE END/////////////////////////////

    ////////////////////////ADMIN USER ROUTE//////////////////////////////
    Route::get('/user',function(){
        $admins =User::all()->where('role', '3');
        return view('admin.admin-pages.users.users')->with(compact('admins'));
    })->name('admin-users');

    Route::get('/adduser',function(){
        return view('admin.admin-pages.users.addusers');
    })->name('admin-user.create');

    Route::get('/edituser{id}',function($id){
        $admins = User::find($id);
        return view('admin.admin-pages.users.edituser')->with(compact('admins'));
    })->name('admin-user.edit');

    Route::delete('/deleteuser/{id}',function($id){
        $user=User::find($id);
        if (!is_null($user)) {
            $user->delete();
            return redirect('./user');
        }
    })->name('admin-user.destroy');
    //////////////////////////ADMIN USER ROUTE END////////////////////////////////

    ///////////////////////////ADMIN SEARCH START////////////////////////////////
    Route::post('/adminsearch',function(){
        $search = Input::get('search');
        if($search != ''){
            $data=User::where('name', 'LIKE', '%'.$search.'%')
                        ->orWhere('city', 'LIKE', '%'.$search.'%')
                        ->paginate(3)
                        ->setpath('');
            $data->appends(array(
                'search' => Input::get('search'),
            ));
            if(count($data) > 0){
                return  view('admin.admin-pages.admin-searchresults')->with(compact(['data']));
            }
            return view('admin.admin-pages.admin-searchresults')->with(compact(['data']));
        }
        $data = User::paginate(3);
        return view('admin.admin-pages.admin-searchresults')->with(compact(['data']));
    })->name('adminsearch');
    /////////////////////////////////ADMIN SEARCH END//////////////////////////////////////////

    /////////////////////////////////ADMIN DOCUMENTS START/////////////////////////////////////
    Route::get('/admin/documents/{id}',function($id){ 
        $teacher = User::find($id);
        $ed = EdInfo::where('user_id', $id)->get();
        $exp = Experience::where('user_id', $id)->get();
        $cert = Certification::where('user_id', $id)->get();
        

        //return $teacher;
        return view('admin.admin-pages.documents')->with(compact('teacher','ed','exp','cert'));
    })->name('documents');
    /////////////////////////////////ADMIN DOCUMENTS END///////////////////////////////////////
    return view('admin.admin-pages.admin-login');
});

// ========================================= END ADMIN ROUTES =================================================//


// ========================================= TUTOR ROUTES =====================================================//
Route::group(['middleware' => 'App\Http\Middleware\TutorMiddleware'], function(){

    ////////////////////////////TUTOR ACCOUNT START//////////////////////////////
    Route::resource('experience', 'ExperienceController');
    Route::resource('certification', 'CertificationController');
    Route::get('availability', 'TeacherController@availability')->name('availability.get');
    Route::put('availability', 'TeacherController@availability_update')->name('availability.update');
    Route::get('/charges',function(){
        $id = Auth::user()->id;
        $user = User::find($id);
        $rate = User::find($id)->teacher;
        return view('tportal.tportal-pages.account.charges')->with(compact(['rate', 'user']));
    });
    ////////////////////////////TUTOR ACCOUNT END////////////////////////////////

    ////////////////////////////TUTOR GIGS START//////////////////////////////
    Route::resource('gigs', 'CourseTeacherController');
    ////////////////////////////TUTOR GIGS END////////////////////////////////

    ////////////////////////////TUTOR PENDING REQUEST START/////////////////////
    Route::get('/pending-request', 'CourseStudentTeacherController@pending_request')->name('pending.request');
    Route::get('verify/{id}', 'CourseStudentTeacherController@verify')->name('verify.enroll');
    Route::delete('cancel-request/{id}', 'CourseStudentTeacherController@cancel_request')->name('verify.destroy');
    ////////////////////////////TUTOR PENDING REQUEST END///////////////////////

    ///////////////////////////ALL ENROLLED STUDENTS START//////////////////////
    Route::get('all-enrolled-students', function(){
        $id = Auth::user()->id;
        $teacher_id = Teacher::where('user_id', $id)->get();
        $tid = $teacher_id[0]->id;
        $students = CourseStudentTeacher::where('teacher_id', $tid)->where('verified', 1)->distinct('student_id')->get();
        $data = array();
        foreach ($students as $item){
            $student_record = Student::find($item->student_id)->user; //getting student info
            $course_teacher = CourseTeacher::find($item->course_teacher_id);
            $course = Course::find($item->course_id);
            $data[] = array(
                'student_id' => $item->student_id,
                'student_name' => $student_record->name,
                'student_profile_img' => $student_record->profile_img,
                'student_contact' => $student_record->phone,
                'course_name' => $course->course_name,
                'tution_type' => $course_teacher->type,
                'tution_area' => $course_teacher->area,
                'tution_city' => $course_teacher->city,
                'created_at' =>$item->updated_at
                );
        }
        return view('tportal.tportal-pages.enrolled-students.all-students')->with(compact('data'));
    })->name('all-enrolled-students');
    ///////////////////////////ALL ENROLLED STUDENTS END//////////////////////
});

/// ========================================= END TUTOR ROUTES =====================================================//

// ========================================== STUDENT ROUTES START ===============================================//

    ////////////////////////////STUDENT ENROLLED IN START///////////////////////////////////
    Route::get('enrolled-in', function(){
        $id = Auth::user()->id;
        $sid = Student::where('user_id', $id)->first();
        $cst = CourseStudentTeacher::where('student_id', $sid['id'])->get();
        $data = array();
        foreach ($cst as $item){
            $course = Course::find($item->course_id);
            $tutor = Teacher::find($item->teacher_id)->user;
            $st = CourseTeacher::find($item->course_teacher_id);
            $data[] = array(
                'tutor_id' => $item->teacher_id,
                'tutor_user_id' => $tutor->id,
                'tutor_name' => $tutor->name,
                'tutor_profile_img' => $tutor->profile_img,
                'tutor_contact' => $tutor->phone,
                'course_name' => $course->course_name,
                'tution_type' => $st->type,
                'tution_area' => $st->area,
                'tution_city' => $st->city,
                'tution_verified' => $item->verified,
                'created_at' =>$st->updated_at
                );
        }
        return view('sportal.sportal-pages.enrolled-in.enrolled-in')->with(compact('data'));
    })->name('enrolledin');
    ////////////////////////////STUDENT ENROLLED IN END///////////////////////////////////

// =========================================END STUDENT ROUTES ===============================================//


Route::get('/admin',function(){
    return view('admin.admin-pages.dashboard');
});

//----------------- AJAX Degree For EdInfo----------------------------//
Route::get('ajax-subdegree', function(Request $request){
    $degree = Degree::find($request['degree_level'])->subdegrees;
    return Response::json($degree);
});
//----------------- AJAX Degree For EdInfo END----------------------------//

// ============================================= CHAT ======================================================//
Route::get('/inbox', function(){
    $id = Auth::user()->id;
    $user = User::find($id);
    $data = array();
    $conversations = User::find($id)->conversations; //getting all the conversation in which this user is participating

    foreach($conversations as $conversation){
        //Getting last message of each conversation//
        $messages = Messages::where('conversation_id', $conversation->id)->orderBy('created_at', 'desc')->take(1)->get();
        //Getting participants for this conversation//
        $participants = Conversations::find($conversation->id)->participants;
        //Getting information for other user////
        foreach($participants as $participant){
            if($participant->id != $id){
                $reciever = $participant->id;
            }
        }
        $user2 = User::find($reciever);
        //Adding data to array//
        foreach($messages as $message){
            $data[] = array(
                'conversation_id' => $message->conversation_id,
                'user1_id' => $id,
                'user2_id' => $user2->id,
                'user2_name' => $user2->name,
                'message_user' => $message->user_id,
                'message' => $message->message,
                'created_at' => $message->created_at,
                'user2_profile_img' => $user2->profile_img
                );
        }
    }
    return view('chat.inbox')->with(compact('data', 'user'));
});

//Getting conversation in box
Route::get('/get-messages', function(Request $request){
    $id = Auth::user()->id;
    $input = $request->all();
    $conversation_id = $input['conversation_id'];
    $messages = Messages::where('conversation_id', $conversation_id)->get();
    $conversationUser = ConversationUser::where('conversation_id', $conversation_id)->where('user_id', '!=', $id)->get();
    $user = User::find($conversationUser[0]->user_id);
    foreach ($messages as $message){
        if ($message->user_id != $id){
            $m = Messages::find($message->id);
            $m->read = 1;
            $m->save();
        }
    }
    return response()->json([
        'messages' => $messages,
        'user2_profile' => $user->profile_img 
    ]);
})->name('getmessages');

Route::post('/store-messages', function(Request $request){
    $input = $request->all();
    Messages::create($input);

})->name('store-messages');

Route::get('/live-messages', function(Request $request){
    $id = Auth::user()->id;
    $messages = Messages::where('conversation_id', '=', $request['conversation_id'])->where('user_id','!=',$id)->where('read','=', false)->get();
    foreach($messages as $message){
        $m = Messages::find($message->id);
        $m->read = 1;
        $m->save();
        //echo $message->id;
    }
    return response()->json([
        'messages' => $messages
    ]);

    //echo $request['conversation_id'];
})->name('live-messages');

Route::get('users', function(Request $request){
    $users = User::all();
    return view('chat.users')->with(compact('users'));
});

Route::get('get-con', function(Request $request){
    $input = $request->all();
    $user1 = Auth::user()->id;
    $user2 = $input['user_id'];
    $check = 0;

    //Getting all the records in which logged in user is involved
    $user1_conversations = ConversationUser::where('user_id', $user1)->get();
    //echo $user1_conversations;
    foreach($user1_conversations as $con){  //this iteration is for number of conversation_id
        $conversations = ConversationUser::where('conversation_id', $con->conversation_id)->where('user_id', $user2)->get();
        if(!$conversations->isEmpty()){
            $check = 1;
        }
    }
    return response()->json([
        'check' => $check,
        'user2' => $user2
    ]);
})->name('get-con');

Route::get('new-chat/{user_id}', function($user_id){
    $user = User::find($user_id);
    return view('chat.new')->with(compact('user'));
})->name('new-chat');

Route::post('make-conversation', function(Request $request){
    $input = $request->all();

    //Create conversation
    $conversationId = Conversations::create([
        'user_id' => Auth::user()->id
    ]);

    //Sender
    $conversation_user = ConversationUser::create([
        'user_id' => Auth::user()->id,
        'conversation_id' => $conversationId->id
    ]);

    //reciever
    ConversationUser::firstOrCreate([
        'user_id' => $request['user2_id'],
        'conversation_id' => $conversationId->id
    ]);

    Messages::create([
        'user_id' => Auth::user()->id,
        'conversation_id' => $conversationId->id,
        'message' => $request['message']
    ]);

})->name('make-conversation');

// ======================================= END CHAT =================================================//

// ============================ TUTOR PROFILE ROUTES ===============================================================//


Route::get('/tutor',function(){
    $id = Auth::user()->id;
    $user = User::find($id);
    return view('tportal.tportal-pages.tportalpage')->with(compact(['user']));
});


Route::get('/current-tutions',function(){
    return view('tportal.tportal-pages.current-tutions');
});


// Route::get('/tprofile',function(){
//     $id = Auth::user()->id;
//     $user= User::find($id);
//     $teacher = User::find($id)->teacher;
//     $edinfos = User::find($id)->edinfos;
//     $certifications = User::find($id)->certifications;
//     $experiences = User::find($id)->experiences;
//     return view('tportal.tprofile-pages.tprofile-page')->with(compact(['user', 'edinfos', 'certifications', 'experiences', 'teacher']));
//  });

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

Route::get('/forum',function(){

    return view('blog.blog-pages.blog-singlepost');
});


//////////////////////////STUDENT ACCOUNT////////////////////////////
Route::prefix('student')->group(function () {
    Route::get('account', 'StudentController@account')->name('account');
    Route::get('educationalinfo', 'StudentController@education')->name('education');
});

Route::get('/mudassar', function(){
    return view('pages.adduser');
});





/////////////////////////////////MUDASSAR ROUTES//////////////////////////////////////
Route::any('/advancesearch',function()
{
     $cities = User::select('city')->distinct()->get();
     $courses = Course::all();

    $data = new User;
    $queries = [];

    $columns = [
        'gender','city'
    ];

     foreach($columns as $column)
     {
         if(request()->has($column))
         {
             $data= $data->where($column, request($column));
             $queries[$column] = request($column);
         }
     }

    //  if(request()->has('subject'))
    //  {
    //      $data = DB::table('course_teachers')->where('course_id' , request('subject'));
    //      $queries['subject'] = request('subject');
    //  }

     $data = $data->paginate(2)->appends($queries);
     return  view('tportal.tportal-pages.searchresult')->with(compact(['data','cities','courses']));

    // if(request()->has('gender'))
    //  {
    //      $data = User::where('gender', request('gender'))->paginate(2);
    //      return  view('tportal.tportal-pages.searchresult')->withData($data);
    //  }

    //   if(request()->has('subject'))
    //  {
    //      $data = DB::table('course_teachers')->where('id' , request('subject'));
    //      return  view('tportal.tportal-pages.searchresult')->withData($data);
    //  }

});

Route::any('/searchresult',function(){
    $cities= User::select('city')->distinct()->get();
    $courses = Course::all();
    $message = "No Result Found";
    $search = Input::get('search');
    if($search != '')
    {
        $data=User::where('name', 'LIKE', '%'.$search.'%')
                    ->orWhere('city', 'LIKE', '%'.$search.'%')
                    ->paginate(3)
                    ->setpath('');
                $data->appends(array(
                    'search' => Input::get('search'),
                ));

                if(count($data) > 0)
                {
                    return  view('tportal.tportal-pages.searchresult')->with(compact(['data', 'cities','courses']));
                }
                return view('tportal.tportal-pages.searchresult')->with(compact(['message', 'cities','courses']));
     }

    $data = User::paginate(3);
     return view('tportal.tportal-pages.searchresult')->with(compact(['data', 'cities','courses', 'user']));
})->name('search');

// ============================ course ROUTES ======================================//

Route::get('/courses',function(){
    $courseTeacher = CourseTeacher::all();
    $courses = array();
    foreach($courseTeacher as $course){
        $user = Teacher::find($course->teacher_id)->user;
        $courses[] = array(
            'id' => $course->id,
            'teacher_id' => $course->teacher_id,
            'course_id' => $course->course_id,
            'title' => $course->title,
            'area' => $course->area,
            'city' => $course->city,
            'class' => $course->class,
            'fee' => $course->fee,
            'created_at' => $course->created_at,
            'type' => $course->type,
            'user_id' => $user->id,
            'tutor_name' => $user->name
        );
    };
    // $courses = json_encode($data);;
    // echo $courses;
    return view('current-tech-course.courses')->with(compact('courses'));
})->name('courses');

Route::get('course/{id}',function($id){
    $check_enrolled = true;
    $check_review = false;
    $course = CourseTeacher::find($id);
    $user = Teacher::find($course->teacher_id)->user;
    if(Auth::check())
        $user_id = Auth::user()->id;
    $reviews = CourseTeacher::find($id)->reviews;
    $count = $reviews->count();
    if(Auth::check()){
        if(Auth::user()->role == 1){
            $student = Student::where('user_id', $user_id)->get();
            //return $student;
            $check1 = CourseStudentTeacher::where('course_teacher_id', $id)->where('student_id', $student[0]->id)->count();
            if($check1 > 0){
                $check_enrolled = false;
            }
            $check2 = Reviews::where('course_teacher_id', $id)->where('user_id', $user_id)->count();
            if($check2 > 0)
                $check_review = true;
        }
    }
    
    //$user = User::find($course->user_id)->first();
    $subject = Course::find($course->course_id)->first();
    //return $course;
    return view('current-tech-course.course-page')->with(compact('course', 'user', 'subject' ,'check_enrolled', 'check_review', 'id', 'reviews', 'count'));
})->name('course.view');

Route::get('show-course', function(){
    return view('current-tech-course.show-courses');
});


//=============================================================================///
Route::get('/clcourse',function(){

    return view('current-tech-course.click-course');
});


Route::get('/join', function(){
    $MyObject = new User;
    $MyObjects = array();

   $datas = Course::find(2)->course_teachers;
   foreach($datas as $data){
        $result = Teacher::find($data->teacher_id)->user();
        $MyObject->id = $result->id;
        $MyObjects[] = $MyObject;

   }
   echo $MyObjects;
});

// ============================ Feedback ROUTES ======================================//
Route::get('/feedback',function(){

    return view('feedback.pfeedback');
});

Route::get('/sprofile',function(){

    return view('sprofile.sprofile-pages.sprofile-page');
});

    /////////////////////////// TUTOR PROFILE START /////////////////////////
    Route::get('/profile',function(){
        $id = Auth::user()->id;
        if(Auth::user()->role == 1){ //student
            $user = User::find($id);
            $edinfos = User::find($id)->edinfos;
            $sid = Student::where('user_id', $id)->get();
            $cst = CourseStudentTeacher::where('student_id', $sid[0]->id)->get();
            $data = array();
            foreach($cst as $item){
                $tutor = Teacher::find($item->teacher_id)->user;
                $course = Course::find($item->course_id);
                $data[] = array(
                    'logged_in' => $id,
                    'id' => $tutor->id,
                    'name' => $tutor->name,
                    'profile_img' => $tutor->profile_img,
                    'course_name' => $course->course_name
                );
            }
            // $tprofile = json_encode($data);
            return view('sprofile.sprofile-pages.sprofile-page')->with(compact('user', 'edinfos', 'data'));
        }
        if(Auth::user()->role == 2){ //student
            $user= User::find($id);
            $teacher = User::find($id)->teacher;
            $edinfos = User::find($id)->edinfos;
            $certifications = User::find($id)->certifications;
            $experiences = User::find($id)->experiences;
            return view('tprofile.tprofile-pages.tprofile-page')->with(compact(['user', 'teacher', 'edinfos', 'certifications', 'experiences']));
        }
        
    });
    
    Route::get('profile/{id}', function($id){
        $user= User::find($id);
        $teacher = User::find($id)->teacher;
        $edinfos = User::find($id)->edinfos;
        $certifications = User::find($id)->certifications;
        $experiences = User::find($id)->experiences;
        return view('tprofile.tprofile-pages.tprofile-page')->with(compact(['user', 'teacher', 'edinfos', 'certifications', 'experiences']));
        
    })->name('profile.id');
    /////////////////////////// END TUTOR PROFILE /////////////////////////

// ====================================== SEARCH ROUTES ==================================================//
    Route::post('searchresults', function(Request $request){
        $courses = Course::all();
        $classes = CourseTeacher::select('class')->distinct('class')->get();
        $cities = CourseTeacher::select('city')->distinct('city')->get();
        $search = $request->search;
        $results = CourseTeacher::with(['user', 'course'])->where('title', 'LIKE', '%'.$search.'%')->paginate(20);
        return view('pages.simplesearch')->with(compact('courses', 'classes', 'cities', 'results'));
    })->name('search-results');

    Route::any('advanceresults', function(Request $request){
        $courses = Course::all();
        $classes = CourseTeacher::select('class')->distinct('class')->get();
        $cities = CourseTeacher::select('city')->distinct('city')->get();
        $selectedCourseId = $request->subject;
        $selectedCity = $request->city;
        $selectedClass = $request->class;
        $results = CourseTeacher::with(['user', 'course'])->where('course_id', $selectedCourseId)->where('city', 'LIKE', '%'.$selectedCity.'%')
        ->where('class', 'LIKE', '%'.$selectedClass.'%')->paginate(20);
        return view('pages.searchresults')->with(compact('courses', 'classes', 'cities', 'results', 'selectedCourseId', 'selectedCity', 'selectedClass'));
    })->name('advance-results');

    Route::get('testsearch', function(){
        return view('pages.testsearch');
    });

// ======================================END SEARCH ROUTES ==================================================//

