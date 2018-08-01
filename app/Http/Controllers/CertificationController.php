<?php

namespace App\Http\Controllers;

use App\Certification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CertificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tportal.tportal-pages.certification');
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
        if($request->experience_img != null){
            $path = $request->file('img')->store('uploads');
            $input['path'] = $path;
        }
        $input['user_id'] = Auth::user()->id;
        
        Certification::create($input)->certifications;
        return redirect('certification');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Certification  $certification
     * @return \Illuminate\Http\Response
     */
    public function show(Certification $certification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Certification  $certification
     * @return \Illuminate\Http\Response
     */
    public function edit(Certification $certification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Certification  $certification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Certification $certification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Certification  $certification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Certification $certification)
    {
        //
    }
}
