@extends('layout')

  @section('content')

    <div class="row">
          
          @foreach ($posts as $post)
          
            @include('posts.post')

          @endforeach
              
    </div>

  @endsection