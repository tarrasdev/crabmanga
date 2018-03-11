<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Post;
use App\Gallery;
use App\Chapter;
use Illuminate\Support\Facades\Gate;

class GalleriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'show']);
    }

    public function create(Post $post, Chapter $chapter)
    {
        if (Gate::allows('update-post', $post)){
            return view('gallery.create', compact('post', 'chapter'));
        } else {
            return view('errors.403');
        }
    }

    public function upload(Post $post, Chapter $chapter)
    {
        if (Gate::allows('update-post', $post)){
            $validator = Validator::make(request('image'), [
                'image.' => 'required|image|mimes:png,jpg,jpeg|max:2048',
        ]);
        foreach(request('image') as $key){
            $name = uniqid().'.'.$key->getClientOriginalExtension();
            $key->move(public_path('images'), $name);
            $path = '/images/'.$name;
            Gallery::create([
                'image' => $path,
                'post_id' => $post->id,
                'chapter_id' => $chapter->id,
                'user_id' => auth()->id()
            ]);
        }
        return redirect('/');
        } else {
            return view('errors.403');
        }
    }
}
