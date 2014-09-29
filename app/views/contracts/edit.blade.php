@extends('layouts.default')

@section('content')

    <h2>Edit a Contract</h2>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{ Form::model($contract, ['method' => 'patch', 'route' => ['contracts.update', $contract->id]])}}
    
        @include('contracts._form')

    {{ Form::close() }}
@stop