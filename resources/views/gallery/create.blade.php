@extends('layout')

@section('content')

<div class='card'>

    <div class='card-block'>
    
        <form action="/posts/{{$post->id}}/gallery/upload" method='POST' enctype="multipart/form-data">
            {{csrf_field()}}
        
            <div class='form-group'>
            
                <input type="file" name='image[]' class='form-control' multiple>
            
            </div>

            <div class='form-group'>
            
               <button type='submit' class='btn btn-primary'>Publish</button>
        
            </div>

        </form>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

    </div>

</div>

@endsection