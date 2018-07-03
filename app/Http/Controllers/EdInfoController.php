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
    public function index()
    {
        //
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
        // // $request->user_id = Auth::user()->id;
        // $edinfo = EdInfo::create($request->all())->efinfos;
        // $user= Auth::user()->id;
        EdInfo::create([
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'institute' => $request->institute,
            'startdate' => $request->startdate,
            'enddate' => $request->enddate,
            'percentage' => $request->percentage,
        ])->edinfos;
        return redirect('/account');
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
    public function update(Request $request, EdInfo $edInfo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\EdInfo  $edInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(EdInfo $edInfo)
    {
        //
    }
}
