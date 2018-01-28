<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Image;

class ImagesController extends Controller
{
    public function store()
    {
        $this->validate(request(),[
            'image'=>'required'
        ]);

        Image::create(request(['image']));

        return redirect('/');
    }
}
