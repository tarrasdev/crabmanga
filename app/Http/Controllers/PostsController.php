<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    public function transformImage($request)
    {
        $input = time().'.'.$request->getClientOriginalExtension();
        //move image file to public folder
        $request->move(public_path('images'), $input);
        //make a variable with a path to the image
        $path = '/images/'.$input;

        return $path;
    }

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
            'body'=>'required',
            'cover' => 'required'
        ]);

        $imagePath = Self::transformImage(request('cover'));

        Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'cover' => $imagePath,
            'user_id' => auth()->id()
        ]);

        return redirect('/');
    }

    public function destroy($id)
    {
       $post = Post::find($id);
       $post->galleries()->delete();
       $post->delete();

       return redirect('/');
    }

    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function update(Post $post)
    {
        $this->validate(request(),[
            'title'=>'required',
            'body'=>'required',
            'cover' => 'required'
        ]);

        $imagePath = Self::transformImage(request('cover'));
      
        Post::find($post->id)->update([
            'title' => request('title'),
            'body' => request('body'),
            'cover' => $imagePath
        ]);
       
        return redirect('/');
   }
}
