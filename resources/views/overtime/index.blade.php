@extends('_layout')
@section('title', 'Überstunden')
@section('content')
    <table id="pouetbox_prodlist" class="boxtable pagedtable">
        <tr class="sortable">
            <th>Overtime date</th>
            <th>Start time</th>
            <th>End time</th>
            <th>Duration</th>
            <th>Reason</th>
            <th>Action</th>
        </tr>
        @foreach($data as $row)
            <tr>
                <td>{{ \Carbon\Carbon::parse($row->overtime_at)->format('d.m.Y') }}</td>
                <td>{{ substr($row->started_at, 0, -3) }}</td>
                <td>{{ substr($row->ended_at, 0, -3) }}</td>
                <td>{{ round($row->overtime_minutes * 0.0166666666667, 2) }}</td>
                <td>{{ $row->reason }}</td>
                <td>
                    {{ Form::open(['action' => 'OvertimeController@delete']) }}
                    {{ Form::hidden('row_id', $row->id) }}
                    {{ Form::submit('Delete') }}
                    {{ Form::close() }}
                </td>
            </tr>
        @endforeach
        <tr>
            <td class="nav" colspan="3" style="text-align: right;">Sum Hours:</td>
            <td>{{ round(\App\Models\Overtime::whereUserId(Auth::id())->sum('overtime_minutes')/60, 2) }}</td>
            <td class="nav" colspan="2"></td>
        </tr>
        <tr>
            <td colspan="6">Add Row</td>
        </tr>
        {{ Form::open(['action' => 'OvertimeController@store']) }}
        <tr>
            <td>{{ Form::date('overtime_date') }}</td>
            <td>{{ Form::time('started_at') }}</td>
            <td>{{ Form::time('ended_at') }}</td>
            <td>
                Plus: {{ Form::radio('type', 'plus' , true) }}<br>
                Minus: {{ Form::radio('type', 'minus' , false) }}
            </td>
            <td>{{ Form::text('reason') }}</td>
            <td>{{ Form::submit() }}</td>
        </tr>
        {{ Form::close() }}
    </table>
@endsection
