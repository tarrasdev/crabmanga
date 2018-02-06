@include('reader/nav')

    @if(count($post->galleries)>1)
                @foreach($post->galleries as $image)
                        <img src="{{$image->image}}" class='pages reader-mode'>
                
                @endforeach
                        <button onclick='addImage(-1)'>Prev</button>
                        <button onclick='addImage(1)'>Next</button>
            @else
                <p>Nothing to show here</p>
    @endif

@include('reader/footer')

