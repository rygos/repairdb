@extends('_layout')
@section('title', 'Stats')
@section('content')
    <table id='pouetbox_prodlist' class='boxtable pagedtable'>
        <tr class='sortable'>
            <th>NAME</th>
            <th>VALUE</th>
        </tr>
        <tr>
            <td>Repairs Closed</td>
            <td>{{ \App\Models\Repair::whereNotIn('closing_reason_id', [2,11])->orWhereNull('closing_reason_id')->count() }}</td>
        </tr>
    </table>
@endsection
