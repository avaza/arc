@extends('layouts.default')

@section('content')

    @if(isset($message))
        <div class="alert alert-success">
            <ul><li>{{ $message }}</li></ul>
        </div>
    @endif

    {{ Form::open(['method' => 'post', 'route' => 'invitations.store']) }}
    <!-- Submit Button -->
    <div class="form-group">
        {{ Form::label('email', 'Send Invitation Email To:') }}
        {{ Form::text('email', null, ['class' => 'form-control']) }}
    </div>

    <!-- Submit Button -->
    <div class="form-group">
        {{ Form::submit('Send Invitation', ['class' => 'btn btn-primary']) }}
    </div>

    {{ Form::close() }}

@stop