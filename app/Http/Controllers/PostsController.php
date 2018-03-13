<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Chapter;
use App\Gallery;
use Illuminate\Support\Facades\Gate;

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
        $posts = Post::latest()->simplePaginate(5);
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
    public function delete(Request $request, Post $post)
    {
        if (Gate::allows('update-post', $post)){
            return view('posts.delete', compact('post'));
        } else {
            return view('errors.403');
        }
    }
    public function destroy(Request $request, Post $post)
    {
        if (Gate::allows('update-post', $post)){
            $post = Post::find($post->id);
            $post->gallery()->delete();
            $post->chapter()->delete();
            $post->delete();
            return redirect('/');
        } else {
            return view('errors.403');
        }
    }
    public function edit(Request $request, Post $post)
    {
        if (Gate::allows('update-post', $post)){
            return view('posts.edit', compact('post'));
        } else {
            return view('errors.403');
        }
    }
    public function update(Post $post)
    {
         if (Gate::allows('update-post', $post)){
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
        } else {
            return view('errors.403');
        }
    }
}
