@extends('layouts.default')

@section('content')

    <h2>Please Sign In</h2>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    {{ Form::open(['route' => 'sessions.store']) }}
    {{ Form::passwordField('password', 'Password:') }}
    {{ Form::password('password', ['class' => 'form-control']) }}
    {{ Form::submitButton('Sign In') }}
    {{ Form::close() }}

@stop