@extends('layout')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-sm-3'>
                @if($post->cover!=null)
                    <img class='img-fluid image-show' src="{{$post->cover}}">
                @endif
                <hr>
                <div class='container'>
                    <div class='row'>
                        @if(Gate::allows('update-post', $post))
                            <a class='btn btn-outline-primary btn-sm buttons' href="/posts/{{$post->id}}/chapter/create">Create a chapter</a>
                            <a class='btn btn-outline-success btn-sm buttons' href="{{$post->id}}/edit">Edit</a>
                            <a class='btn btn-outline-danger btn-sm buttons' href="{{$post->id}}/delete">Delete</a>    
                        @endif
                    </div>
                </div>
            </div>
            <div class='col-7'>
                    <p>Uploaded by {{$post->user->name}}</p>
                    <h2>{{$post->title}}</h2>
                    <p>{{$post->body}}</p>
            </div>
        </div>
    </div>
<hr>
<div class='row'>
    <div class='col-md-5'>
        @foreach($post->chapter as $chapter)
            <div class='container'>
                <a class=''href="/posts/{{$post->id}}/chapter/{{$chapter->id}}/show">Volume {{$chapter->volume}} Chapter {{$chapter->chapter_number}} "{{$chapter->chapter_name}}"  </a>
            </div>
        @endforeach
    </div>
</div> 
@endsection