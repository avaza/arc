@extends('layouts.default')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h1>Register your account</h1>
            {{ Form::open() }}
                <!-- Access Code Form Input -->
                <div class="form-group">
                    {{ Form::label('access_code', 'Access Code:') }}
                    {{ Form::text('access_code', null, ['class' => 'form-control']) }}
                </div>

                <!-- Email Form Input -->
                <div class="form-group">
                    {{ Form::label('email', 'Email:') }}
                    {{ Form::text('email', null, ['class' => 'form-control']) }}
                </div>

                <!-- First Name Form Input -->
                <div class="form-group">
                    {{ Form::label('first_name', 'First Name:') }}
                    {{ Form::text('first_name', null, ['class' => 'form-control']) }}
                </div>

                <!-- Last Name Form Input -->
                <div class="form-group">
                    {{ Form::label('last_name', 'Last Name:') }}
                    {{ Form::text('last_name', null, ['class' => 'form-control']) }}
                </div>

                <!-- Password Form Input -->
                <div class="form-group">
                    {{ Form::label('password', 'Password:') }}
                    {{ Form::password('password', ['class' => 'form-control']) }}
                </div>

                <!-- Confirm Password Form Input -->
                <div class="form-group">
                    {{ Form::label('confirm_password', 'Confirm Password:') }}
                    {{ Form::password('confirm_password', ['class' => 'form-control']) }}
                </div>

                <!-- Submit Form Input -->
                <div class="form-group">
                    {{ Form::submit('Register', ['class' => 'btn btn-primary']) }}
                </div>

            {{ Form::close() }}
        </div>
    </div>
@stop