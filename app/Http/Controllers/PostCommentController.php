<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Comment;

use App\Http\Requests;

class PostCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($post_id)
    {

        $post = Post::find($post_id);
        $comments = $post->comments()
        ->get();
        $data = ['post' => $post, 'comments' => $comments];
        var_dump($data['post']['body']);die();
        return view('post.comments.index')->with('data', $data);
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
        if(!Post::find($input['post_id'])) {
            $this->validate($request, [
                'post_id' => 'numeric',
                'comment' => 'required',
                'visible' => 'numeric',
            ]);
            Comment::create($request->toArray());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($post_id, $comment_id)
    {
        echo "Hit the show function";
        echo $post_id;
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
}
