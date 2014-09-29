@extends('layouts.default')

@section('content')
    <div class="jumbotron">
        <h1>Welcome to the ARC System!</h1>
            <p>You're gonna love this....</p>
        <p>{{ link_to_route('register_path', 'Get Started', null, ['class' => 'btn btn-primary btn-lg']) }}</p>
    </div>

@stop