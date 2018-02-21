@extends('layout')

@section('content')

<div class='col-sm-8'>
    
        <form action="/posts/{{$post->id}}/gallery/upload" method='POST' enctype="multipart/form-data">
            {{csrf_field()}}
        
            <div class='form-group'>
                <label for="volume">Volume:</label>
                <input type="text" class='form-control' id='volume' name='volume' required>
            </div>

            <div class='form-group'>
                <label for="chapter_number">Number of the chapter:</label>
                <input type="text" class='form-control' id='chapter_number' name='chapter_number' required>
            </div>

            <div class='form-group'>
                <label for="chapter_name">Name of the chapter:</label>
                <input type="text" class='form-control' id='chapter_name' name='chapter_name' required>
            </div>

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

@endsection