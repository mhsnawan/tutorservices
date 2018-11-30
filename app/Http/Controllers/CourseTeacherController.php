<?php

namespace App\Http\Controllers;

use App\CourseTeacher;
use App\Teacher;
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
        $id = Auth::user()->id;
        $tutions = Teacher::find($id)->course_teachers;
        return view('tportal.tportal-pages.gigs.gigs')->with(compact('tutions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        return view('tportal.tportal-pages.gigs.create-gig')->with(compact('courses'));
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
        //return $input;
        $user_id = Auth::user()->id;
        $teacher_id = User::find($user_id)->teacher;
        $input['user_id'] = $user_id;
        $input['teacher_id'] = $teacher_id->id;
        CourseTeacher::create($input);
        return redirect ('gigs');
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
    public function edit(string $courseTeacher)
    {
        $tution = CourseTeacher::find($courseTeacher);
        $courses = Course::all();
        return view('tportal.tportal-pages.gigs.edit-gig')->with(compact('courses', 'tution'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CourseTeacher  $courseTeacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $courseTeacher)
    {
        // $input = $request->all();
        // return $input;
        //CourseTeacher::findOrFail($courseTeacher)->first()->fill($request->all())->save();
        $input = $request->all();
        $data = CourseTeacher::find($courseTeacher);
        $data->fill($input)->save();
        return redirect('gigs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CourseTeacher  $courseTeacher
     * @return \Illuminate\Http\Response
     */
    public function destroy($courseTeacher)
    {
        $gig = CourseTeacher::find($courseTeacher);
        $gig->delete();
        return redirect('gigs');
    }

}
