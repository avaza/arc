@extends('layouts.default')

@section('content')

    <h2>Edit a Client</h2>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{ Form::model($client, ['method' => 'patch', 'route' => ['clients.update', $client->id]])}}
    
        @include('clients._form')

    {{ Form::close() }}
@stop