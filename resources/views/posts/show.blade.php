@extends('layout')

@section('content')

    <div class='container'>
        <div class='row'>
            <div class='col'>

                @if($post->cover!=null)
                    <img class='img-fluid' src="{{$post->cover}}">
                @endif

                <hr>

                <div class='container'>
                    <div class='row'>
                        
                        <a class='btn btn-outline-dark' href="posts/{{$post->id}}/edit">Edit</a>
                        
                        <form action="/posts/{{$post->id}}" method='POST'>
                            {{csrf_field()}}
                            {{method_field('DELETE')}}
                                <button class='btn btn-outline-dark'>Delete Post</button>
                            
                        </form>
                    </div>
                </div>

            </div>

            <div class='col-6'>
                <h2>{{$post->title}}</h2>

                <p>{{$post->body}}</p>

                <a class='btn btn-outline-dark' href="/posts/{{$post->id}}/gallery/create">Upload</a>
            </div>
        </div>
    </div>

<hr>

@endsection