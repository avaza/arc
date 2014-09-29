@extends('layouts.default')

@section('content')
    <h1>All Divisions</h1>
    
    @if($divisions->count())
    
        @foreach($divisions as $division)
            
            <li>{{ link_to('divisions/' . $division->id , $division->id_number) }}</li>
        
        @endforeach
        
    @else
        
        <p>There are no divisions in the database!</p>
        <p><small>Add One Now!</small></p>
        {{link_to('divisions/create', 'Add Division', ['class' => 'btn btn-primary'])}}
    
    @endif
@stop