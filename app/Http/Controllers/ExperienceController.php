<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Experience;
use App\User;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        //$this->middleware('auth');
    }
    
    public function index()
    {
        $id = Auth::user()->id;
        $user = User::find($id);
        $experiences = User::find($id)->experiences;
        return view('tportal.tportal-pages.account.experience')->with(compact(['experiences', 'user']));
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
        if($request->experience_img != null){
            $filename =  $request->experience_img->getClientOriginalName();
            $path = $request->file('experience_img')->storeAs('public/uploads',$filename);
            $second =  $request->file('experience_img')->storeAs('uploads',$filename);
            $input['experience_img'] = $second;
        }
        $input['user_id'] = Auth::user()->id;
            Experience::create($input)->experiences;
            return redirect('experience');
        // json_encode($response);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Experience::findOrFail($id)->first()->fill($request->all())->save();
        return redirect('experience');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $id->delete();
        return redirect('experience');
    }
}
