<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Gallery;

class GalleriesController extends Controller
{

    public function create(Post $post)
    {
        return view('gallery.create', compact('post'));
    }

    public function upload(Post $post)
    {
  
        foreach(request('image') as $key){
            $name = uniqid().'.'.$key->getClientOriginalExtension();
            $key->move(public_path('images'), $name);
            $path = '/images/'.$name;
   
            Gallery::create([
                'image' => $path,
                'post_id' => $post->id
            ]);
        }

        return redirect('/');
    }

    public function show(Post $post)
    {
        return view('gallery.show', compact('post'));        
    }
}
