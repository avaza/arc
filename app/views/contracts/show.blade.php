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
            @foreach($contract as $field => $value)
            <tr>
                <td>{{ $field }}</td>
                <td>{{ $value }}</td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td>{{link_to('contracts/', 'Back to List', ['class' => 'btn btn-primary'])}}</td>
                <td>{{link_to("contracts/{$contract->id}/edit", 'Edit Details', ['class' => 'btn btn-primary'])}}</td>
            </tr>
        </tfoot>
    </table>
@stop