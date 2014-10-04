@extends('layouts.default')

@section('content')

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <td><strong>Detail</strong></td>
                <td><strong>Value</strong></td>
            </tr>
        </thead>
        <tbody>
            @foreach($client->attributes as $field => $value)
            <tr>
                <td>{{ $field }}</td>
                <td>{{ $value }}</td>
            </tr>
           @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td>{{link_to('clients/', 'Back to List', ['class' => 'btn btn-primary'])}}</td>
                <td>{{link_to("clients/{$client->id}/edit", 'Edit Details', ['class' => 'btn btn-primary'])}}</td>
            </tr>
        </tfoot>
    </table>
    {{ link_to('invitations/create', 'Send Invitation Email', ['class' => 'btn btn-primary']) }}
@stop

