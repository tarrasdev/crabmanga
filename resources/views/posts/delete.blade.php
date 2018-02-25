@extends('layout')
@section('content')
<form action="/posts/{{$post->id}}" method='POST'>
    {{csrf_field()}}
    {{method_field('DELETE')}}
    <button class='btn btn-outline-danger buttons'>Delete Post</button>
</form>
@endsection