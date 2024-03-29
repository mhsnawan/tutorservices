<?php

namespace App\Http\Controllers;

use App\EdInfo;
use App\User;
use App\Degree;
use App\SubDegree;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EdInfoController extends Controller
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
        $id = Auth::user()->id;
        $user = User::find($id);
        $edinfos = User::find($id)->edinfos;
        $degrees = Degree::all();
        $subdegrees = SubDegree::all();
        return view('tportal.tportal-pages.account.educationalinfo')->with(compact(['edinfos', 'user', 'degrees', 'subdegrees']));
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
        $user= Auth::user();
        $input = $request->all();
        if($request->degree_img != null){
            $filename =  $request->degree_img->getClientOriginalName();
            $path = $request->file('degree_img')->storeAs('public/uploads',$filename);
            $second =  $request->file('degree_img')->storeAs('uploads',$filename);
            $input['degree_img'] = $second;
        }
        $degreeLevel = Degree::find($input['degree_level']);
        $subLevel = SubDegree::find($input['title']);
        $input['degree_level'] = $degreeLevel->name;
        $input['title'] = $subLevel->name;
        $input['user_id'] = Auth::user()->id;
        Edinfo::create($input)->edinfos;
        return redirect('edinfo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\EdInfo  $edInfo
     * @return \Illuminate\Http\Response
     */
    public function show(EdInfo $edInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\EdInfo  $edInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(EdInfo $edInfo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\EdInfo  $edInfo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $edinfo)
    {
        Edinfo::findOrFail($edinfo)->first()->fill($request->all())->save();
        return redirect('edinfo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EdInfo  $edInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(EdInfo $edInfo)
    {
        $edInfo->delete();
        return redirect('edinfo');
    }
}
