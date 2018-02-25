@extends('layout')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-5'>
                @if($post->cover!=null)
                    <img class='img-fluid image-show' src="{{$post->cover}}">
                @endif
                <hr>
                <div class='container'>
                    <div class='row'>
                        @if(Gate::allows('update-post', $post))
                            <a class='btn btn-outline-primary buttons' href="/posts/{{$post->id}}/gallery/create">Upload</a>
                            <a class='btn btn-outline-success buttons' href="{{$post->id}}/edit">Edit</a>
                            <a class='btn btn-outline-danger buttons' href="{{$post->id}}/delete">Delete</a>    
                        @endif
                    </div>
                </div>
            </div>
            <div class='col-7'>
                <p>Uploaded by {{$post->user->name}}</p>
                <h2>{{$post->title}}</h2>
                <p>{{$post->body}}</p>
                <a href="/posts/{{$post->id}}/gallery/reader" class='btn btn-outline-info'>Read</a>   
            </div>
        </div>
    </div>
<hr>
@endsection