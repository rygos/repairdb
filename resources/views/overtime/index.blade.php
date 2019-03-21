@extends('_layout')
@section('title', 'Überstunden')
@section('content')
    <table id="pouetbox_prodlist" class="boxtable pagedtable">
        <tr class="sortable">
            <th>Created at</th>
            <th>Overtime date</th>
            <th>Start time</th>
            <th>End time</th>
            <th>Minutes</th>
            <th>Reason</th>
            <th>Action</th>
        </tr>
        <tr>
            <td class="nav" colspan="4">Sum:</td>
            <td>{{ \App\Models\Overtime::whereUserId(Auth::id())->sum('overtime_minutes')/60 }}</td>
            <td class="nav" colspan="2"></td>
        </tr>
        <tr>
            <td colspan="7">Add Row</td>
        </tr>
        {{ Form::open(['action' => 'OvertimeController@store']) }}
        <tr>
            <td></td>
            <td>{{ Form::date('overtime_date') }}</td>
            <td>{{ Form::time('started_at') }}</td>
            <td>{{ Form::time('ended_at') }}</td>
            <td></td>
            <td>{{ Form::text('reason') }}</td>
            <td>{{ Form::submit() }}</td>
        </tr>
        {{ Form::close() }}
    </table>
@endsection
