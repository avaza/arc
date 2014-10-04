@extends('layouts.default')

@section('content')

    @if(isset($message))
        <div class="alert alert-success">
            <ul><li>{{ $message }}</li></ul>
        </div>
    @endif

    {{ Form::open(['method' => 'post', 'route' => 'invitations.store']) }}
    {{ Form::textField('email', 'Send Invitation Email To:') }}
    {{ Form::submitButton('Send Invitation') }}
    {{ Form::close() }}

@stop