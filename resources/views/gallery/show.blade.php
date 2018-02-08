@extends('reader/layout')

@section('content')

@if(count($post->galleries)>1)
            @foreach($post->galleries as $image)
                    <img src="{{$image->image}}" class='pages reader-mode'>
            @endforeach
        @else
            <p>Nothing to show here</p>
@endif

@endsection

