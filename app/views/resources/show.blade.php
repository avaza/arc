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
                <td>ID Number</td>
                <td>{{ $resource->id_number }}</td>
            </tr>
            <tr>
                <td>First Name</td>
                <td>{{ $resource->first_name }}</td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td>{{ $resource->last_name }}</td>
            </tr>
            <tr>
                <td>Extension</td>
                <td>{{ strlen($resource->extension_num) > 0 ? $resource->extension_num:"N/A" }}</td>
            </tr>
            <tr>
                <td>Pin Number</td>
                <td>{{ strlen($resource->extension_pin) > 0 ? $resource->extension_pin:"N/A" }}</td>
            </tr>
            <tr>
                 <td>Primary Phone</td>
                 <td>{{ $resource->primary_phone }}</td>
            </tr>
            <tr>
                 <td>Secondary Phone</td>
                 <td>{{ strlen($resource->secondary_phone) > 0 ? $resource->secondary_phone:"None" }}</td>
            </tr>
            <tr>
                 <td>Active</td>
                 <td>{{ $resource->active == TRUE ? "Yes":"No" }}</td>
            </tr>
            <tr>
                <td>Time Zone</td>
                <td>{{ $resource->time_zone }}</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <td>{{link_to('resources/', 'Back to List', ['class' => 'btn btn-primary'])}}</td>
                <td>{{link_to("resources/{$resource->id}/edit", 'Edit Details', ['class' => 'btn btn-primary'])}}</td>
            </tr>
        </tfoot>
    </table>
    {{link_to('invitations/create', 'Send Invitation Email', ['class' => 'btn btn-primary'])}}

@stop