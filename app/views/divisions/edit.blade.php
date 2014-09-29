@extends('layouts.default')

@section('content')

    <h2>Edit a Division</h2>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{ Form::model($division, ['method' => 'patch', 'route' => ['divisions.update', $division->id]])}}
    
        @include('divisions._form')

    {{ Form::close() }}
@stop