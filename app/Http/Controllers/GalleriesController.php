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
        $this->validate(request(), [
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        //give a name for an image
        $input = time().'.'.request('image')->getClientOriginalExtension();
        //move image file to the public folder
        request('image')->move(public_path('images'), $input);
        //make a variable with a path to the image
        $path = '/images/'.$input;

        //inser the path and the post title to DB
        
        Gallery::create([
            'image' => $path,
            'post_id' => $post->id
        ]);

        return back();
    }
}
