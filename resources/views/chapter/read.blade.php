@extends('reader/layout')

@section('content')
    @if(count($chapter->gallery)>=1)
                @foreach($chapter->gallery as $image)
                        <img src="{{$image->image}}" class='pages reader-mode'>
                @endforeach
            @else
                <p>Nothing to show here</p>
    @endif
@endsection