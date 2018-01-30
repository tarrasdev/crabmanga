@extends('layout')

@section('content')

<div class='col-sm 8 blog-main'>

    <h1>Update a post</h1>

    <hr>

    <form action="/posts/{{$post->id}}" method='POST' enctype='multipart/form-data'>
        {{csrf_field()}}
        {{method_field('PATCH')}}
        
            <div class='form-group'>
                <label for="title">Title</label>
                <input type="text" class='form-control' id='title' name='title'>
            </div>

            <div class='form-group'>
                <label for="body">Body</label>
                <textarea name="body" id="body" class='form-control'></textarea>
            </div>

            <div class='form-group'>
                    <input type="file" name='cover' class='form-control'>
            </div>

            <div class='form-group'>
                <button type='submit' class='btn btn-primary'>Publish</button>
            </div>

    </form>

</div>

@endsection