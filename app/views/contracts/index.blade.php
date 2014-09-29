@extends('layouts.default')

@section('content')
    <h1>All Contracts</h1>
    
    @if($contracts->count())
    
        @foreach($contracts as $contract)
            
            <li>{{ link_to('contracts/' . $contract->id , $contract->id_number) }}</li>
        
        @endforeach
        
    @else
        
        <p>There are no contracts in the database!</p>
        <p><small>Add One Now!</small></p>
        {{link_to('contracts/create', 'Add contract', ['class' => 'btn btn-primary'])}}
    
    @endif
@stop