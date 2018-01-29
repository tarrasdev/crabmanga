<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Image;

class ImagesController extends Controller
{

    public function upload(Post $post)
    {
        $this->validate(request(), [
            'title' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        //give a name for an image
        $input = time().'.'.request('title')->getClientOriginalExtension();
        //move image file to the public folder
        request('title')->move(public_path('images'), $input);
        //make a variable with a path to the image
        $path = '/images/'.$input;

        //inser the path and the post title to DB
        
        Image::create([
            'title' => $path,
            'post_id' => $post->id
        ]);

        return back();
    }
}
