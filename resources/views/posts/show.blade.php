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

                        <a class='btn btn-outline-success buttons' href="{{$post->id}}/edit">Edit</a>

                        <form action="/posts/{{$post->id}}" method='POST'>
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                            <button class='btn btn-outline-danger buttons'>Delete Post</button>
                        </form>

                        <a class='btn btn-outline-primary buttons' href="/posts/{{$post->id}}/gallery/create">Upload</a>

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