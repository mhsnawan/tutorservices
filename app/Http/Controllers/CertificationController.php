<?php

namespace App\Http\Controllers;

use App\Certification;
use App\User;
use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CertificationController extends Controller
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
        $certifications = User::find($id)->certifications;
        return view('tportal.tportal-pages.account.certification')->with(compact(['certifications', 'user']));  
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
        if($request->certification_img != null){
            $filename =  $request->certification_img->getClientOriginalName();
            $path = $request->file('certification_img')->storeAs('public/uploads',$filename);
            $second =  $request->file('certification_img')->storeAs('uploads',$filename);
            $input['certification_img'] = $second;
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
        Certification::findOrFail($certification)->first()->fill($request->all())->save();
        return redirect('certification');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Certification  $certification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Certification $certification)
    {
        $certification->delete();
        return redirect('certification');
    }
}
