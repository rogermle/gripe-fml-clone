<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

use App\Http\Requests;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::where('visible', 1)
                        ->orderBy('created_at', 'DESC')
                        ->paginate(25);

        return view('post.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => 'required|max:255',
            'nick' => 'required',
            'sex'  => 'required',
        ]);

        Post::create($request->toArray());

        return redirect()->route('post.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        $post = Post::find($id);
        if($request->ajax())
        {
            return $post;
        }
        return view('post.show')->with('post', $post);
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function upvote($id)
    {
        $post = Post::find($id);
        if(!$post)
        {
            throw new \Exception('Unable to find post');
        }
        $post->agree++;
        $post->save();
    }

    public function downvote($id)
    {
        $post = Post::find($id);
        if(!$post)
        {
            throw new \Exception('Unable to find post');
        }
        $post->disagree++;
        $post->save();
    }

    public function search(Request $request)
    {
        $query = $request->get('query');
        if(!$query)
        {
            $posts = Post::paginate(25);
            return view('post.index')->with('posts', $posts);
        }
        $searchedPosts = Post::where('body', 'LIKE', "%$query%")->paginate(25);
        return view('post.index')->with('posts', $searchedPosts);
    }
}
