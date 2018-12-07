<?php

namespace App\Http\Controllers;

use App\Teacher;
use Illuminate\Http\Request;
use App\Course;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
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
        $userid = Auth::user()->id;
        $teacher = Teacher::find($userid);
        return view('tportal.tportal-pages.rate')->with(compact('teacher'));
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
        $user= Auth::user()->id;
        $teacher = Teacher::find($user);
        $teacher->courses()->attach($request->course, ['fee'=>$request->fee, 'type'=>$request->type]);
       // return view('pages.profile')->with(compact('users'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function show(Teacher $teacher)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function edit(Teacher $teacher)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $teacher)
    {
        Teacher::where('user_id','=', $teacher)->first()->fill($request->all())->save();
        return redirect('charges');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Teacher  $teacher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teacher $teacher)
    {
        //
    }

    public function availability(){
        $id = Auth::user()->id;
        $user = Teacher::find($id);
        return view('tportal.tportal-pages.account.availability')->with(compact(['user']));
    }

    public function availability_update(Request $request){
        $input = $request->all();
        $availability = Teacher::find($input['id'])->first();
        $availability->fill($input)->save();
        return redirect('availability');
    }
    
}
