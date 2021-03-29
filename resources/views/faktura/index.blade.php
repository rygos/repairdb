@extends('_layout')
@section('title', 'Faktura')
@section('content')
    @if(Auth::user()->access_reports == 1)
        <table id="pouetbox_prodlist" class="boxtable pagedtable">
            <tr class="sortable">
                <th>ServiceOrder</th>
                <th>ZLB</th>
                <th>G-No.</th>
                <th>Customer</th>
                <th>Serial Number</th>
                <th>Model</th>
                <th>Technician</th>
                <th>Remarks</th>
                <th>KVA Doc.</th>
                <th>KVA Fee</th>
                <th>KVA Total</th>
                <th>H.Garantie</th>
                <th>Kd.verschulden</th>
                <th>Ersa Kosten</th>
                <th>XCharge Total</th>
                <th>Status</th>
            </tr>

            <form method="get" action="{{ action('FakturaController@index') }}" >
                @csrf
                <tr>
                    <td colspan="3">Date from: <input type="date" id="start" name="search_start" value="{{ $search_start->format('Y-m-d') }}">
                    </td>
                    <td colspan="3">Date to: <input type="date" id="end" name="search_end" value="{{ $search_end->format('Y-m-d') }}"></td>
                    <td colspan="1">Customer:
                    <select name="customer" id="customer">
                        <option value="all">All Customers</option>
                        @foreach($customers as $item)
                            <option value="{{ $item->id }}">{{ $item->customer }}</option>
                        @endforeach
                    </select>
                    </td>
                    <td><button type="submit" value="Select">Select</button></td>
                    <td colspan="7"></td>
                </tr>
            </form>

            @foreach($data as $item)
                <tr>
                    <td><a href="{{ action('RepairController@show', ['id' => $item->id]) }}">{{ $item->rminst()->rminst }}</a></td>
                    <td>{{ $item->rminst()->zlb }}</td>
                    <td>{{ $item->g_no }}</td>
                    <td>{{ $item->customer()->customer }}</td>
                    <td>{{ $item->unit()->serial }}</td>
                    <td>{{ $item->model()->model }}</td>
                    <td>{{ $item->user()->name }}</td>
                    <td>{{ $item->remarks }}</td>
                    <td>WIP</td>
                    <td>{{ ($item->kva_fee == 1) ? "Ja" : "Nein" }}</td>
                    <td>{{ $item->kva_costs }}</td>
                    <td>{{ ($item->warranty) ? "Ja" : "Nein" }}</td>
                    <td>{{ ($item->thirdpartydamage) ? "Ja" : "Nein" }}</td>
                    <td>{{ $item->costs }}</td>
                    @php
                        $total = 0;
                        $x = \App\Models\CrossCharge::whereRepairId($item->id)->get();
                        foreach($x as $xi){
                            $total += $xi->amount;
                        }
                    @endphp
                    <td>{{ $total }}</td>
                    @if(!$item->closing_reason_id)
                        <td style="background-color: green; color: white;">NEW</td>
                    @else
                        @php $reason = \App\Models\ClosingReason::whereId($item->closing_reason_id)->first()->reason; @endphp
                        @switch ($reason)
                            @case('DOA')
                            <td style="background-color: red; color: white;">DOA</td>
                            @break
                            @case('WIB')
                            <td style="background-color: yellow; color: black;">WIB</td>
                            @break
                            @case('ORDERED')
                            <td style="background-color: orange; color: green">ORDERED</td>
                            @break
                            @case('SUCCESS')
                            <td style="background-color: green;">SUCCESS</td>
                            @break
                            @case('NDF')
                            <td style="background-color: green;">NDF</td>
                            @break
                            @case('WAIT FOR INFO')
                            <td style="background-color: blue;">WAIT FOR INFO</td>
                            @break
                            @case('KVA')
                            <td style="background-color: purple;">KVA</td>
                            @break
                            @case('MAIL-IN')
                            <td style="background-color: hotpink; color: white;">MAIL-IN</td>
                            @break
                            @case('REPAIR HH')
                            <td style="background-color: white; color: black;">REPAIR HH</td>
                            @break
                            @case('KVA - ABGELEHNT')
                            <td style="background-color: purple;color:red;">KVA - ABGELEHNT</td>
                            @break
                            @case('KVA - GENEHMIGT')
                            <td style="background-color: purple;color:green">KVA - GENEHMIGT</td>
                            @break
                            @default
                            <td>{{ $reason }}</td>
                        @endswitch
                    @endif
                </tr>
            @endforeach
        </table>
    @else
        <center>Access Denied.</center>
    @endif
@endsection
