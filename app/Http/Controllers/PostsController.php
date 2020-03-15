<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $posts = post::all();
        // $posts = post::orderBy('title', 'desc')->get();
        // $posts = post::orderBy('title', 'asc')->get();
        $posts = post::orderBy('title', 'asc')->paginate(3);
        return view ('posts.index')->with('post',$posts);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);
     // Create post
     $post = new post;
     $post->title= $request->input('title');
     $post->body= $request->input('body');
     $post->save();

     return redirect('/post')->with('success','Post Created');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = post::find($id);
        return view('posts.show')->with('post',$post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post =post::find($id);
        return view  ('posts.edit')->with('post',$post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
        ]);
     // Create post
     $post = post::find($id);
     $post->title= $request->input('title');
     $post->body= $request->input('body');
     $post->save();

     return redirect('/post')->with('success','Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $post = post::find($id);
       $post->delete();
       return redirect('/post')->with('success','Post Removed');
    }
}
