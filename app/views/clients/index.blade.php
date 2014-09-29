@extends('layouts.default')

@section('content')
    <h1>All clients</h1>
    
    @if($clients->count())
    
        @foreach($clients as $client)
            
            <li>{{ link_to('clients/' . $client->id, $client->id) }}</li>
        
        @endforeach
        
    @else
        
        <p>There are no clients in the database!</p>
        <p><small>Add One Now!</small></p>
        {{link_to('clients/create', 'Add client', ['class' => 'btn btn-primary'])}}
    
    @endif
@stop