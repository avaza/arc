@extends('layouts.default')

@section('content')
    <h1>All Resources</h1>
    
    @if($resources->count())
    
        @foreach($resources as $resource)
            
            <li>{{ link_to('resources/' . $resource->id, $resource->id_number) }}</li>
        
        @endforeach
        
    @else
        
        <p>There are no resources in the database!</p>
        <p><small>Add One Now!</small></p>

    
    @endif
    {{link_to('resources/create', 'Add Resource', ['class' => 'btn btn-primary'])}}
@stop