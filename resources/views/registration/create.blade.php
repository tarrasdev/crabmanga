@extends('layout')

@section('content')

    <div class='col-sm-8'>
    
        <h1>Register</h1>

        <form method='POST' action='/register'>
            {{csrf_field()}}

            <div class='form-group'>
                <label for="name">Name:</label>
                <input type="text" class='form-control' id='name' name='name' required>
            </div>

            <div class='form-group'>
                <label for="email">Email:</label>
                <input type="email" class='form-control' id='email' name='email' required>
            </div>

            <div class='form-group'>
                <label for="password">Password:</label>
                <input type="password" class='form-control' id='password' name='password' required>
            </div>
            
            <div class='form-group'>
                <label for="password_confirmation">Password Confirmation:</label>
                <input type="password" class='form-control' id='password_confirmation' name='password_confirmation' required>
            </div>

            <div class='form-group'>
                <button type='submit' class='btn btn-primary'>Register</button>
            </div>
                
        </form> 

        @if(count($errors))
            <div class='form-group'>
                <div class='alert alert-danger'>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
    
    </div>

@endsection