<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Image;

class ImagesController extends Controller
{
    // public function store(Post $post)
    // {

    //     $post->addImage(request('title'));
    //     return back();
    // }

    public function upload(Request $request)
    {
    	$this->validate($request, [
            'title' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        //generate title name and store
        $input['title'] = time().'.'.$request->title->getClientOriginalExtension();
        //move image to specific gallery
        $request->title->move(public_path('images'), $input['title']);

        $input['post_id'] = '1';
        
        Image::create($input);

    	return back()
    		->with('success','Image Uploaded successfully.');
    }

    
}
