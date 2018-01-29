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


<div class='card'>

    <div class='card-block'>
    
        <form action="/posts/{{$post->id}}/images/" method='POST' enctype="multipart/form-data">
            {{csrf_field()}}
        
            <div class='form-group'>
            
                <input type="file" name='title' class='form-control'>
            
            </div>

            <div class='form-group'>
            
               <button type='submit' class='btn btn-primary'>Publish</button>
        
            </div>

        </form>

    </div>

</div>

<!-- <div class='card'>

    <div class='card-block'>
    
        <form action="/posts/{{$post->id}}/images/" method='POST'>
            {{csrf_field()}}
        
            <div class='form-group'>
            
                <textarea class='form-control' name="title" id="title" placeholder='Title'></textarea>
            
            </div>

            <div class='form-group'>
            
               <button type='submit' class='btn btn-primary'>Publish</button>
        
            </div>

        </form>

    </div>

</div> -->

@endsection