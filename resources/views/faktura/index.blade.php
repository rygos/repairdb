@extends('_layout')
@section('title', 'Faktura')
@section('content')
    @if(Auth::user()->access_reports == 1)
        <table id="pouetbox_prodlist" class="boxtable pagedtable">
            <tr class="sortable">
                <th>ServiceOrder</th>
                <th>Customer</th>
                <th>Serial Number</th>
                <th>Model</th>
                <th>Technician</th>
                <th>Remarks</th>
                <th>KVA Doc.</th>
                <th>KVA Fee</th>
                <th>KVA Total</th>
                <th>XCharge Total</th>
            </tr>

            @foreach($data as $item)
                <tr>
                    <td><a href="{{ action('RepairController@show', ['id' => $item->id]) }}">{{ $item->rminst()->rminst }}</a></td>
                    <td>{{ $item->customer()->customer }}</td>
                    <td>{{ $item->unit()->serial }}</td>
                    <td>{{ $item->model()->model }}</td>
                    <td>{{ $item->user()->name }}</td>
                    <td>{{ $item->remarks }}</td>
                    <td>WIP</td>
                    <td>{{ ($item->kva_fee == 1) }}</td>
                    <td>{{ $item->kva_costs }}</td>
                    @php
                        $total = 0;
                        $x = \App\Models\CrossCharge::whereRepairId($item->id)->get();
                        foreach($x as $xi){
                            $total += $xi->amount;
                        }
                        $total += $item->costs;
                    @endphp
                    <td>{{ $total }}</td>
                </tr>
            @endforeach
        </table>
    @else
        <center>Access Denied.</center>
    @endif
@endsection
