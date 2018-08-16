<?php

namespace App\Http\Controllers;

use App\EdInfo;
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
        $edinfos = Edinfo::all();
        return view('tportal.tportal-pages.educationalinfo')->with(compact('edinfos'));
        // return view('tportal.tportal-pages.educationalinfo');
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
            $path = $request->file('degree_img')->store('uploads');
            $input['degree_img'] = $path;
        }
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
