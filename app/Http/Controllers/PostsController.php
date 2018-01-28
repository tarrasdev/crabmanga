<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        $this->validate(request(),[
            'title'=>'required',
            'body'=>'required'
        ]);

        Post::create(request(['title', 'body']));

        return redirect('/');
    }

    public function destroy($id)
    {
        Post::find($id)->delete();
        return back();
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Post $post)
    {
        $this->validate(request(),[
            'title'=>'required',
            'body'=>'required'
        ]);
        
        Post::find($post->id)->update(request(['title', 'body']));
        return redirect('/');
    }

    public function images()
    {
        return view('images.create');
    }

    public function imagesUpload()
    {
        
        return view('images.create');
    }
}
