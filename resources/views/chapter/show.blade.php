@extends('layout')
@section('content')
    <a href="/posts/{{$post->id}}/chapter/{{$chapter->id}}/read" class='btn btn-outline-info'>Read</a>
    @if(Gate::allows('update-post', $post))
        <a class='btn btn-outline-primary buttons' href="/posts/{{$post->id}}/chapter/{{$chapter->id}}/gallery/create">Upload</a> 
        <form action="/posts/{{$post->id}}/chapter/{{$chapter->id}}/destroy" method='POST'>
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button class='btn btn-outline-danger buttons'>Delete Chapter</button>
        </form>
    @endif 
@endsection