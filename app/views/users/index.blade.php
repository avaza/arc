@extends('layouts.default')

@section('content')
    <h1>All users</h1>

    @if($users->count())

        @foreach($users as $user)

            <li>{{ link_to('users/' . $user->username , $user->username) }}</li>

        @endforeach

    @else
        
        <p>There are no users in the database!</p>

    @endif
@stop