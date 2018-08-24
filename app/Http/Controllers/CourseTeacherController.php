<?php

namespace App\Http\Controllers;

use App\CourseTeacher;
use App\Course;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class CourseTeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        //echo $course;
        return view('tportal.tportal-pages.posttution')->with(compact('courses'));
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
        $input = $request->all();
        $user_id = Auth::user()->id;
        $teacher_id = User::find($user_id)->teacher;
        $input['user_id'] = $user_id;
        $input['teacher_id'] = $teacher_id->id;
        CourseTeacher::create($input);
        return redirect ('post-tution');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CourseTeacher  $courseTeacher
     * @return \Illuminate\Http\Response
     */
    public function show(CourseTeacher $courseTeacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CourseTeacher  $courseTeacher
     * @return \Illuminate\Http\Response
     */
    public function edit(CourseTeacher $courseTeacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CourseTeacher  $courseTeacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CourseTeacher $courseTeacher)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CourseTeacher  $courseTeacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(CourseTeacher $courseTeacher)
    {
        //
    }
}
