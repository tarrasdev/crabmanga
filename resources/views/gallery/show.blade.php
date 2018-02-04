@extends('layout')

@section('content')


    @if(count($post->galleries)>1)
        <div class='row'>
            @foreach($post->galleries as $image)
                <div class='col-md-3'>
                    <img src="{{$image->image}}" class='img-fluid'>
                </div>
            @endforeach
        </div>
    @else
        <p>Nothing to show here</p>
    @endif

@endsection