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
            @foreach($agency as $field => $value)
            <tr>
                <td>{{ $field }}</td>
                <td>{{ $value }}</td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td>{{link_to('agencies/', 'Back to List', ['class' => 'btn btn-primary'])}}</td>
                <td>{{link_to("agencies/{$agency->id}/edit", 'Edit Details', ['class' => 'btn btn-primary'])}}</td>
            </tr>
        </tfoot>
    </table>
@stop