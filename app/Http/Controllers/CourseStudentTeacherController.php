<?php

namespace App\Http\Controllers;

use App\CourseStudentTeacher;
use App\CourseTeacher;
use App\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CourseStudentTeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
    public function edit(CourseStudentTeacher $courseStudentTeacher)
    {
        //
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
}
