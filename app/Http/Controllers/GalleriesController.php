<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Post;
use App\Gallery;
use Illuminate\Support\Facades\Gate;

class GalleriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'show']);
    }

    public function create(Post $post)
    {
        if (Gate::allows('update-post', $post)){
            return view('gallery.create', compact('post'));
        } else {
            return view('errors.403');
        }
    }

    public function upload(Post $post)
    {
        if (Gate::allows('update-post', $post)){
            $validator = Validator::make(request('image'), [
                'image.' => 'required|image|mimes:png,jpg,jpeg|max:2048',
        ]);
        $this->validate(request(),[
            'volume'=>'required',
            'chapter_number'=>'required',
            'chapter_name' => 'required'
        ]);
        foreach(request('image') as $key){
            $name = uniqid().'.'.$key->getClientOriginalExtension();
            $key->move(public_path('images'), $name);
            $path = '/images/'.$name;
   
            Gallery::create([
                'image' => $path,
                'post_id' => $post->id,
                'volume' => request('volume'),
                'chapter_number' => request('chapter_number'),
                'chapter_name' => request('chapter_name'),
                'user_id' => auth()->id()
            ]);
        }
        return redirect('/');
        } else {
            return view('errors.403');
        }
    }
    public function show(Post $post)
    {
        return view('gallery.show', compact('post'));        
    }
}
