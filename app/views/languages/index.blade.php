@extends('layouts.default')

@section('content')
    <h1>All Languages</h1>
    
    @if($languages->count())
    
        @foreach($languages as $language)
            
            <li>{{ link_to('languages/' . $language->id , $language->id_number) }}</li>
        
        @endforeach
        
    @else
        
        <p>There are no languages in the database!</p>
        <p><small>Add One Now!</small></p>
        <!--  Form Input -->
        {{link_to('languages/create', 'Add Language', ['class' => 'btn btn-primary'])}}
    
    @endif
@stop