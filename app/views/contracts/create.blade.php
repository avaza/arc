@extends('layouts.default')

@section('content')

    <h2>Add a Contract</h2>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{ Form::open(['method' => 'post', 'route' => 'contracts.store'])}}
    
        @include('contracts._form')

    {{ Form::close() }}
@stop