<?php

namespace App\Http\Controllers;

use App\Chapter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Post;
use App\Gallery;
use Illuminate\Support\Facades\Gate;

class ChapterController extends Controller
{
    public function create(Post $post)
    {
        if (Gate::allows('update-post', $post)){
            return view('chapter.create', compact('post'));
        } else {
            return view('errors.403');
        }
    }
    public function store(Post $post)
    {
        if (Gate::allows('update-post', $post)){
            $this->validate(request(),[
                'chapter_name'=>'required',
                'chapter_number'=>'required',
                'volume' => 'required'
            ]);
            Chapter::create([
                'chapter_name' => request('chapter_name'),
                'chapter_number' => request('chapter_number'),
                'volume' => request('volume'),
                'post_id' => $post->id,
                'user_id' => auth()->id()
            ]);
            return redirect('/');
        } else {
            return view('errors.403');
        }
    }
    public function edit(Post $post, Chapter $chapter)
    {
        return view('chapter.show', compact('post','chapter'));
    }
    public function destroy(Post $post, Chapter $chapter)
    {
        if (Gate::allows('update-post', $post)){
            $chapter = Chapter::find($chapter->id);
            $chapter->gallery()->delete();
            $chapter->delete();
            return redirect('/');
        } else {
            return view('errors.403');
        }
    }
    public function read(Post $post, Chapter $chapter)
    {
        return view('chapter.read', compact('chapter', 'post'));
    }
}
