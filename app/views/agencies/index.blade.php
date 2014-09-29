@extends('layouts.default')

@section('content')
    <h1>All Agencies</h1>
    
    @if($agencies->count())
    
        @foreach($agencies as $agency)
            
            <li>{{ link_to('agencies/' . $agency->id , $agency->id_number) }}</li>
        
        @endforeach
        
    @else
        
        <p>There are no agencies in the database!</p>
        <p><small>Add One Now!</small></p>
        <!--  Form Input -->
        {{link_to('agencies/create', 'Add Agency', ['class' => 'btn btn-primary'])}}
    
    @endif
@stop