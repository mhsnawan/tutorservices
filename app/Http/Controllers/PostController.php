<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.XX
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('admin.admin-pages.posts.posts')->with(compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.admin-pages.posts.add-post');
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
        //echo $request->img;
        if($request->img != null){
            $fileName =  $request->img->getClientOriginalName();
             $path = $request->file('img')->storeAs('public/uploads',$fileName);
             $second =  $request->file('img')->storeAs('uploads',$fileName);
             $input['img'] = $second;
         }
        Post::create($input);
        return redirect('admin/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(string $posts)
    {
        $post = Post::find($posts);
        $url = Storage::url($post->img);
        return view('admin.admin-pages.posts.editpost')->with(compact(['post', 'url']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $input = $request->all();
        if($request->img != null){
            $fileName =  $request->img->getClientOriginalName();
             $path = $request->file('img')->storeAs('public/uploads',$fileName);
             $second =  $request->file('img')->storeAs('uploads',$fileName);
             $input['img'] = $second;
         }
        Post::findOrFail($post->id)->fill($input)->save();;
        //$p->fill($input)->save();
        return redirect('admin/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('admin/posts');
    }
}
