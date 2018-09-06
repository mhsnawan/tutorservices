<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;
use Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Blog::all();
        return view('admin.admin-pages.posts.posts')->with(compact('posts'));
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
        $input['author'] = 'admin';
        echo $request->img;
        if($request->img != null){
            $path = $request->file('img')->store('uploads');
            $input['img'] = $path;
        }
        Blog::create($input);
        return redirect('posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(string $blog)
    {
        $post = Blog::find($blog);
        $url = Storage::url($post->img);
        return view('admin.admin-pages.posts.editpost')->with(compact(['post', 'url']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $blog)
    {
        //echo $blog;
        Blog::findOrFail($blog)->first()->fill($request->all())->save();
        
        //return redirect('posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect('posts');
    }
}
