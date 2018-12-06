<?php

namespace App\Http\Controllers;

use App\CourseStudentTeacher;
use App\CourseTeacher;
use App\Student;
use App\Course;
use App\Teacher;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CourseStudentTeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $courses = CourseTeacher::all();
        //echo $courses;
        return view('tportal.tportal-pages.enroll')->with(compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = Auth::user()->id;
        $input = $request->all();
        $s = Student::where('user_id', $id)->first();
        $input['student_id'] = $s->id;
        CourseStudentTeacher::create($input);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CourseStudentTeacher  $courseStudentTeacher
     * @return \Illuminate\Http\Response
     */
    public function show(CourseStudentTeacher $courseStudentTeacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CourseStudentTeacher  $courseStudentTeacher
     * @return \Illuminate\Http\Response
     */
    public function edit(string $courseStudentTeacher)
    {
        echo $courseStudentTeacher;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CourseStudentTeacher  $courseStudentTeacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CourseStudentTeacher $courseStudentTeacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CourseStudentTeacher  $courseStudentTeacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourseStudentTeacher $courseStudentTeacher)
    {
        //
    }

    public function pending_request(){
        $data = array();
        $id = Auth::user()->id;
        $teacher = Teacher::where('user_id', $id)->first();
        $courseTeacher = CourseStudentTeacher::where('teacher_id', $teacher->id)->where('verified', 0)->get();
        foreach ($courseTeacher as $item){
            $student = Student::find($item->student_id)->user;
            $course = Course::find($item->course_id);
            $teacherCourse = CourseTeacher::find($item->course_teacher_id);
            $data[] = array(
                'id' => $course->id,
                'tution_title' => $teacherCourse->title,
                'tution_area' => $teacherCourse->area,
                'tution_city' => $teacherCourse->city,
                'course_id' => $course->id,
                'course_name' => $course->course_name,
                'teacher_id' => $item->teacher_id,
                'student_user_id' => $student->id,
                'student_name' => $student->name,
                'student_phone' => $student->phone,
                'created_at' => $item->created_at
                );
        }
        return view('tportal.tportal-pages.requests.course-request')->with(compact('data'));
    }

    public function verify($id){
        $course = CourseStudentTeacher::findOrFail($id)->first();
        $course['verified'] = 1;
        $course->save();
        return redirect('/pending-request');
    }


}
