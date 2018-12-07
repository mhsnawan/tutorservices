<?php

namespace App\Http\Controllers;

use App\User;
use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
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
        $user = User::find($userid);
        return view('tportal.tportal-pages.account.personalinfo')->with(compact(['user', 'teacher']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user();
        //$user->name = $request['name'];
        $user->cnic = $request['cnic'];
        $user->phone = $request['phone'];
        $user->gender = $request['gender'];
        $user->age = $request['age'];
        $user->nationality = $request['nationality'];
        $user->address1 = $request['address1'];
        $user->address2 = $request['address2'];
        $user->city = $request['city'];
        $user->save();
        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('home');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $user)
    {
        $input = $request->all();
        //return $input;
        if ($request->hasFile('cnic_img')){
            return $request->file->store('public/upload');
        }
        User::findOrFail($user)->fill($request->all())->save();
        return redirect('account');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

}
