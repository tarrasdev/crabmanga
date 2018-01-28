@extends('layout')

@section('content')

    <div class='container'>
        <div class='row'>
            <div class='col'>

                @if($post->images!=null)
                    <img class='img-fluid' src="{{$post->images->title}}">
                @endif

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
            </div>
        </div>
    </div>

<hr>

<div class='row'>
<div class='col'>
<form action="/posts/{post}/images" class="form-image-upload" method="POST" enctype="multipart/form-data">


        {{csrf_field()}}


        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
        </div>
        @endif


        <div class="row">
            <div class="col-md-5">
                <strong>Image:</strong>
                <input type="file" name="title" class="form-control">
            </div>
            <div class="col-md-2">
                <br/>
                <button type="submit" class="btn btn-success">Upload</button>
            </div>
        </div>


    </form> 

    </div>
    </div>

<!-- <div class='row'>
    <div class='col'>

        <h3>Upload an image</h3>

        <form action="/posts/{{$post->id}}/images" method='POST'>
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
</div> -->

<hr>

@endsection