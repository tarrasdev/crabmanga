<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Post;
use App\Gallery;

class GalleriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'show']);
    }

    public function create(Post $post)
    {
        return view('gallery.create', compact('post'));
    }

    public function upload(Post $post)
    {
        
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
                'user_id' => auth()->id()
            ]);
        }

        return redirect('/');
    }

    public function show(Post $post)
    {
        return view('gallery.show', compact('post'));        
    }
}
