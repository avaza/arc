@extends('layouts.default')

@section('content')

    <h2>Add a Resource</h2>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{ Form::open(['method' => 'post', 'route' => 'resources.store'])}}
    
        @include('resources._form')

    {{ Form::close() }}
@stop