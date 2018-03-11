@extends('layout')
@section('content')
<p>Create a chapter</p>
<div class='col-sm-8'>
          <form action="/posts/{{$post->id}}/chapter/store" method='POST' enctype="multipart/form-data">
            {{csrf_field()}}
            <div class='form-group'>
                <label for="chapter_name">Chapter name</label>
                <input type="text" class='form-control' id='chapter_name' name='chapter_name'>
            </div>
            <div class='form-group'>
                <label for="chapter_number">Chapter number</label>
                <input type="text" class='form-control' id='chapter_number' name='chapter_number'>
            </div>
            <div class='form-group'>
                <label for="volume">Volume</label>
                <input type="text" class='form-control' id='volume' name='volume'>
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