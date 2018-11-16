@extends('_layout')
@section('title', 'Stats')
@section('content')
    <table id='pouetbox_prodlist' class='boxtable pagedtable'>
        <tr class='sortable'>
            <th>NAME</th>
            <th>VALUE</th>
        </tr>
        <tr>
            <td>Repairs</td>
            <td>{{ \App\Models\Repair::count() }}</td>
        </tr>
        <tr>
            <td>Repairs Open</td>
            <td>{{ \App\Models\Repair::whereNotIn('closing_reason_id', [2,11])->orWhereNull('closing_reason_id')->count() }}</td>
        </tr>
        <tr>
            <td>Repairs Success</td>
            <td>{{ \App\Models\Repair::whereClosingReasonId(2)->count() }}</td>
        </tr>
        <tr>
            <td>Repairs NDF</td>
            <td>{{ \App\Models\Repair::whereClosingReasonId(11)->count() }}</td>
        </tr>
        <tr>
            <td>Parts in DB</td>
            <td>{{ \App\Models\Spare::count() }}</td>
        </tr>
        <tr>
            <td>Parts ordered</td>
            <td>{{ \App\Models\SparesToRepair::count() }}</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
    </table>
@endsection
