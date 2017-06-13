<?php

namespace App\Http\Controllers;

use Auth;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:120',
            'content' => 'required'
        ]);
        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        Auth::user()->posts()->save($post);
        return redirect('/');
    }
}
