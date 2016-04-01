<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Http\Requests;

class PageController extends Controller
{
    public function topgripes(Request $request)
    {
        $posts = Post::orderBy('agree', 'desc');
        if($request->ajax())
        {
            return $posts;
        }
        return view('page.topgripes')->with('posts', $posts->paginate(10));
    }

    public function randomgripes(Request $request)
    {
        $posts = Post::orderByRaw('RAND()');
        if($request->ajax())
            return $posts;
        return view('page.randomgripes')->with('posts', $posts->paginate(10));

    }
}
