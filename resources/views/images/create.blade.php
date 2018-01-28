@extends('layout')

@section('content')

<div class='col-sm 8 blog-main'>

    <h1>Upload an image</h1>

    <hr>

    <form action="/posts/{{$post->id}}" method='POST'>
    {{csrf_field()}}
    
    <div class='form-group'>
        <label for="title">Image</label>
        <input type="text" class='form-control' id='title' name='title'>
    </div>

    <div class='form-group'>
        <button type='submit' class='btn btn-primary'>Upload</button>
    </div>

    </form>

</div>

@endsection