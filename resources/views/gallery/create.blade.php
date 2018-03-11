@extends('layout')
@section('content')
<p>Upload images</p>
<div class='col-sm-8'>
          <form action="/posts/{{$post->id}}/chapter/{{$chapter->id}}/gallery/upload" method='POST' enctype="multipart/form-data">
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
@endsection