<?php

namespace App\Http\Controllers;

use App\SubDegree;
use App\Degree;
use Illuminate\Http\Request;

class SubDegreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subdegrees = SubDegree::all();
        return view('admin.admin-pages.degree.subdegree.subdegree')->with(compact('subdegrees'));;
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
        $degree = Degree::find($input['degree_id']);
        $degree->subdegrees()->create([
            'name' => $input['name']
        ]);
        redirect('subdegree');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubDegree  $subDegree
     * @return \Illuminate\Http\Response
     */
    public function show(SubDegree $subDegree)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubDegree  $subDegree
     * @return \Illuminate\Http\Response
     */
    public function edit(string $subDegree)
    {
        $degrees = SubDegree::find($subDegree);
        $levels = Degree::all();
        //echo $levels;
        return view('admin.admin-pages.degree.subdegree.edit-subdegree')->with(compact('degrees', 'levels'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubDegree  $subDegree
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $subDegree)
    {
        SubDegree::findOrFail($subDegree)->first()->fill($request->all())->save();
        return redirect('subdegree');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubDegree  $subDegree
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubDegree $subDegree)
    {
        $subDegree->delete();
        return redirect('subdegree');
    }
}
