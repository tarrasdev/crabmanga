@extends('layout')

@section('content')

    <form action="/images/create" action='POST' enctype='multipart/form-data'>
    
        <label >Select image:</label>
        <input type="file" name='file' id='file'>
        <input type="submit" value='Upload' name='Submit'>
    
    </form>

@endsection