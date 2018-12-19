@extends('_layout')
@section('title', 'Stats')
@section('content')
    <table id='pouetbox_prodlist' class='boxtable pagedtable'>
        <tr class='sortable'>
            <th>NAME</th>
            <th>SUM</th>
            @if(Auth::check())
                @if(Auth::id() != 3)
                    <th>MH</th>
                    <th>SB</th>
                    <th>DB</th>
                @endif
            @endif
        </tr>
        <tr>
            <td>Repairs</td>
            <td>{{ \App\Models\Repair::count() }}</td>
            @if(Auth::check())
                @if(Auth::id() != 3)
                    <td>{{ \App\Models\Repair::whereUserId(1)->count() }}</td>
                    <td>{{ \App\Models\Repair::whereUserId(2)->count() }}</td>
                    <td>{{ \App\Models\Repair::whereUserId(3)->count() }}</td>
                @endif
            @endif
        </tr>
        <tr>
            <td>Repairs Open</td>
            <td>{{ \App\Models\Repair::whereNotIn('closing_reason_id', [2,11])->orWhereNull('closing_reason_id')->count() }}</td>
            @if(Auth::check())
                @if(Auth::id() != 3)
                    <td>{{\App\Models\Repair::where('user_id', '=', 1)->whereNotIn('closing_reason_id', [2,11])->orWhereNull('closing_reason_id')->count() }}</td>
                    <td>{{\App\Models\Repair::where('user_id', '=', 2)->whereNotIn('closing_reason_id', [2,11])->orWhereNull('closing_reason_id')->count() }}</td>
                    <td>{{\App\Models\Repair::where('user_id', '=', 3)->whereNotIn('closing_reason_id', [2,11])->orWhereNull('closing_reason_id')->count() }}</td>
                @endif
            @endif
        </tr>
        <tr>
            <td>Repairs Success</td>
            <td>{{ \App\Models\Repair::whereClosingReasonId(2)->count() }}</td>
            @if(Auth::check())
                @if(Auth::id() != 3)
                    <td>{{ \App\Models\Repair::whereClosingReasonId(2)->where('user_id', '=', 1)->count() }}</td>
                    <td>{{ \App\Models\Repair::whereClosingReasonId(2)->where('user_id', '=', 2)->count() }}</td>
                    <td>{{ \App\Models\Repair::whereClosingReasonId(2)->where('user_id', '=', 3)->count() }}</td>
                @endif
            @endif
        </tr>
        <tr>
            <td>Repairs NDF</td>
            <td>{{ \App\Models\Repair::whereClosingReasonId(11)->count() }}</td>
            @if(Auth::check())
                @if(Auth::id() != 3)
                    <td>{{ \App\Models\Repair::whereClosingReasonId(11)->where('user_id', '=', 1)->count() }}</td>
                    <td>{{ \App\Models\Repair::whereClosingReasonId(11)->where('user_id', '=', 2)->count() }}</td>
                    <td>{{ \App\Models\Repair::whereClosingReasonId(11)->where('user_id', '=', 3)->count() }}</td>
                @endif
            @endif
        </tr>
        <tr>
            <td>Parts in DB</td>
            <td>{{ \App\Models\Spare::count() }}</td>
            @if(Auth::check())
                @if(Auth::id() != 3)
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                @endif
            @endif
        </tr>
        <tr>
            <td>Parts ordered</td>
            <td>{{ \App\Models\SparesToRepair::count() }}</td>
            @if(Auth::check())
                @if(Auth::id() != 3)
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                @endif
            @endif
        </tr>
    </table>
@endsection
