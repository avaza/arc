@extends('layouts.default')

@section('content')

    <h2>Edit a agency</h2>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{ Form::model($agency, ['method' => 'patch', 'route' => ['agencies.update', $agency->id]])}}
    
        @include('agencies._form')

    {{ Form::close() }}
@stop