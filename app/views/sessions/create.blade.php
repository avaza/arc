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

    <!-- Email Form Input -->
    <div class="form-group">
        {{ Form::label('email', 'Email:') }}
        {{ Form::text('email', null, ['class' => 'form-control']) }}
    </div>

    <!-- Password Form Input -->
    <div class="form-group">
        {{ Form::label('password', 'Password:') }}
        {{ Form::password('password', ['class' => 'form-control']) }}
    </div>

    <!-- Submit Button -->
    <div class="form-group">
        {{ Form::submit('Sign In', ['class' => 'btn btn-primary']) }}
    </div>

    {{ Form::close() }}

@stop