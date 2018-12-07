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

        // $this->validate($request,[
        //     'cnic_img'  =>
        //     'required|image|mimes:jpeg,png,jpg,png|max:3072'

        // ]);
        $input = $request->all();
      
        if($request->cnic_img != null){
           $fileName =  $request->cnic_img->getClientOriginalName();
            $path = $request->file('cnic_img')->storeAs('public/uploads',$fileName);
            $second =  $request->file('cnic_img')->storeAs('uploads',$fileName);
            $input['cnic_img'] = $second;
        }
        User::findOrFail($user)->fill($input)->save();
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
