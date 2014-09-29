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
            <tr>
                <td>First Name</td>
                <td>{{ $client->first_name }}</td>
            <tr>
                <td>Last Name</td>
                <td>{{ $client->last_name }}</td>
            </tr>
            <tr>
                <td>Phone</td>
                <td>{{ $client->phone }}</td>
            <tr>
                <td>Extension</td>
                <td>{{ strlen($client->phone_ext) > 0 ? $client->phone_ext:"N/A" }}</td>
            </tr>
            <tr>
                <td>Fax</td>
                <td>{{ strlen($client->fax) > 0 ? $client->fax:"N/A" }}</td>
            </tr>
            <tr>
                <td>Time Zone</td>
                <td>{{ $client->time_zone }}</td>
            </tr>
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

