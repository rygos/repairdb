@extends('_layout')
@section('title', 'XCharge Report')
@section('content')
@if(Auth::user()->access_xcharge == 1)
    <table id="pouetbox_prodlist" class="boxtable pagedtable">
        <tr class="sortable">
            <th>SeriveOrder</th>
            <th>Serial</th>
            <th>Cost Centre</th>
            <th>Cost Element</th>
            <th>Amount</th>
            <th>Text</th>
            <th>Charged</th>
        </tr>

        <form method="get" action="{{ action('XChargeController@index') }}" >
            @csrf
            <tr>
                <td colspan="2">Date from: <input type="date" id="start" name="search_start" value="{{ $search_start->format('Y-m-d') }}">
                </td>
                <td colspan="2">Date to: <input type="date" id="end" name="search_end" value="{{ $search_end->format('Y-m-d') }}"></td>
                <td colspan="2">{{-- Customer:
                    <select name="customer" id="customer">
                        <option value="all">All Customers</option>
                        @foreach($customers as $item)
                            <option value="{{ $item->id }}">{{ $item->customer }}</option>
                        @endforeach
                    </select>--}}
                </td>
                <td><button type="submit" value="Select">Select</button></td>
            </tr>
        </form>>

        @foreach($data as $item)
            <tr>
                <td><a href="{{ action('RepairController@show', ['id' => $item->repair_id]) }}">{{ $item->service_order }}</a></td>
                <td>{{ $item->serial }}</td>
                <td>{{ $item->cost_centre }}</td>
                <td>{{ $item->cost_element }}</td>
                <td align="right">{{ number_format($item->amount ,2) }}€</td>
                <td>{{ $item->text }}</td>
                <td>{{ $item->charged }} @if($item->charged == 1)({{ $item->charged_date }})@endif</td>
            </tr>
        @endforeach
    </table>
@else
    <center>Access Denied.</center>
@endif
@endsection
