@extends('layouts.default')

@section('content')

    <h2>Edit a Resource</h2>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{ Form::model($resource, ['method' => 'patch', 'route' => ['resources.update', $resource->id]])}}
    
        @include('resources._form')

    {{ Form::close() }}
@stop