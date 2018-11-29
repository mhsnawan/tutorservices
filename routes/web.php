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
use App\ConversationUser;
use App\Messages;
use App\Conversations;
use Illuminate\Http\Request;

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
Route::resource('degree', 'DegreeController');
Route::resource('subdegree', 'SubDegreeController');
Route::resource('city', 'CitiesController');
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

//-----------------Course----------------------------//
Route::get('/addcourse',function(){
    return view('admin.admin-pages.courses.addcourse');
});


Route::get('/editcourse',function(){
    return view('admin.admin-pages.courses.editcourse');
});

//-------------End Course----------------------------//

//-----------------Blog----------------------------//
Route::get('/addpost',function(){
    return view('admin.admin-pages.posts.add-post');
});
//-------------End Blog----------------------------//

//-----------------Degree----------------------------//
Route::get('/adddegree',function(){
    return view('admin.admin-pages.degree.add-degree');
});

Route::get('/addsubdegree',function(){
    $degrees = Degree::all();
    return view('admin.admin-pages.degree.subdegree.add-subdegree')->with(compact('degrees'));
});

Route::get('ajax-subdegree', function(Request $request){
    $degree = Degree::find($request['degree_level'])->subdegrees;
    return Response::json($degree);
    //echo($degree);
});
//-----------------End Degree----------------------------//

//-----------------Cities----------------------------//
Route::get('/addcity',function(){
    return view('admin.admin-pages.cities.add-city');
});

Route::get('/editcity',function(){
    return view('admin.admin-pages.cities.edit-city');
});
//-----------------End Cities----------------------------//

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


Route::get('/charges',function(){
    $id = Auth::user()->id;
    $user = User::find($id);
    $rate = User::find($id)->teacher;
    return view('tportal.tportal-pages.charges')->with(compact(['rate', 'user']));
});

Route::post('/charges',function(Request $request){
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

//////////////////////////CHAT////////////////////////////////
Route::get('/inbox', function(){
    $id = Auth::user()->id;
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
                );
        }
    }
    return view('chat.inbox')->with(compact('data'));
});

//Getting conversation in box
Route::get('/get-messages', function(Request $request){
    $id = Auth::user()->id;
    $input = $request->all();
    $conversation_id = $input['conversation_id'];
    $messages = Messages::where('conversation_id', $conversation_id)->get();
    foreach ($messages as $message){
        if ($message->user_id != $id){
            $m = Messages::find($message->id);
            $m->read = 1;
            $m->save();
        }
    }
    return response()->json([
        'messages' => $messages
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

//////////////////////////////////CHAT///////////////////////////////////



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
    //  dd(Input::get('search'));
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
     return view('tportal.tportal-pages.searchresult')->with(compact(['data', 'cities','courses']));
});


Route::get('/teacher',function(){
    $teachers =User::all()->where('role', '2');
    return view('admin.admin-pages.teachers.teachers')->with(compact('teachers'));
});

Route::get('/editteacher/{id}',function($id){
    $teachers = User::find($id);
    //echo $teachers;
    return view('admin.admin-pages.teachers.editteacher')->with(compact('teachers'));
});

Route::put('/updateteacher/{id}',function(Request $request, $id){
    // User::findOrFail($id)->first()->fill($request->all())->save();
    $user = User::find($id);
    // $user->fill($request->all())->save();
    // return redirect('./teacher');
    $input = $request->all();
    $user->fill($input)->save();
    return redirect('./teacher');
    //Session::flash('flash_message', 'Task successfully added!');
});

Route::delete('/deleteteacher/{id}',function($id){
    $user=User::find($id);
    if (!is_null($user)) {
        $user->delete();
        return redirect('./teacher');
    }
});

Route::get('/students',function(){
    $students =User::all()->where('role', '1');
    return view('admin.admin-pages.students.students')->with(compact('students'));
});

Route::get('/editstudent/{id}',function($id){
    $students = User::find($id);
    //echo $teachers;
    return view('admin.admin-pages.students.editstudent')->with(compact('students'));
});

Route::put('/updatestudent/{id}',function(Request $request, $id){
    // User::findOrFail($id)->first()->fill($request->all())->save();
    $user = User::find($id);
    // $user->fill($request->all())->save();
    // return redirect('./teacher');
    $input = $request->all();
    $user->fill($input)->save();
    return redirect('./students');
    //Session::flash('flash_message', 'Task successfully added!');
});

Route::delete('/deletestudent/{id}',function($id){
    $user=User::find($id);
    if (!is_null($user)) {
        $user->delete();
        return redirect('./students');
    }
});


Route::get('/user',function(){
    $admins =User::all()->where('role', '3');
    return view('admin.admin-pages.users.users')->with(compact('admins'));
});

Route::get('/adduser',function(){
    return view('admin.admin-pages.users.addusers');
});

Route::get('/edituser{id}',function($id){
    $admins = User::find($id);
    return view('admin.admin-pages.users.edituser')->with(compact('admins'));
});

Route::delete('/deleteuser/{id}',function($id){
    $user=User::find($id);
    if (!is_null($user)) {
        $user->delete();
        return redirect('./user');
    }

});

// ============================ tprofile ROUTES ======================================//
Route::get('/profile',function(){
    $id = Auth::user()->id;
    $user= User::find($id);
    $teacher = User::find($id)->teacher;
    $edinfos = User::find($id)->edinfos;
    $certifications = User::find($id)->certifications;
    $experiences = User::find($id)->experiences;
    return view('tprofile.tprofile-pages.tprofile-page')->with(compact(['user', 'teacher', 'edinfos', 'certifications', 'experiences']));
});
Route::get('/posttution',function(){

    return view('tprofile.tprofile-pages.posttution');
});
// ============================ course ROUTES ======================================//

Route::get('/currentc',function(){

    return view('current-tech-course.currentc');
});
Route::get('/currentr',function(){

    return view('current-tech-course.course-request');
});
Route::get('/shcourse',function(){

    return view('current-tech-course.show-courses');
});
Route::get('/clcourse',function(){

    return view('current-tech-course.click-course');
});
