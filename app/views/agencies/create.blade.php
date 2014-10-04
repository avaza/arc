@extends('layouts.default')

@section('content')

    <h2>Add an Agency</h2>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{ Form::open(['method' => 'post', 'route' => 'agencies.store']) }}
    
        @include('agencies._form')

    {{ Form::close() }}
@stop