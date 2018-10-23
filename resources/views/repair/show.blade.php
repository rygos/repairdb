@extends('_layout')
@section('title', 'Repair - '.$data->rminst()->rminst.' / '.$data->rminst()->zlb)
@section('content')
    <div id="prodpagecontainer">
        <table id="pouetbox_prodmain">
            <tbody>
                <tr id="prodheader">
                    <th colspan='2'>
                        <span id='title'><big>{{ 'Repair - '.$data->rminst()->rminst.' / '.$data->rminst()->zlb }}</big></span>
                        <div id='nfo'></div>
                    </th>
                </tr>
                <tr>
                    <td>
                        <table id="stattable">
                            <tr>
                                <td>Customer:</td>
                                <td>{{ $data->customer()->customer }}</td>
                            </tr>
                            <tr>
                                <td>Call-Type:</td>
                                <td>{{ $data->rminst()->calltype()->type }}</td>
                            </tr>
                            <tr>
                                <td>ZLB Created:</td>
                                <td>{{ \Carbon\Carbon::parse($data->rminst()->zlb_created_at)->toDateString() }}</td>
                            </tr>
                            <tr>
                                <td>Repair started at:</td>
                                <td>{{ Carbon\Carbon::parse($data->started_at)->toDateString() }}</td>
                            </tr>
                            <tr>
                                <td>Status:</td>
                                @if(!$data->closing_reason_id)
                                    <td style="background-color: green; color: white;">NEW</td>
                                @else
                                    @php $reason = \App\Models\ClosingReason::whereId($data->closing_reason_id)->first()->reason; @endphp
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
                                        @default
                                        <td>{{ $reason }}</td>
                                    @endswitch
                                @endif
                            </tr>
                            <tr>
                                <td>Technician:</td>
                                <td>{{ $data->user()->name }}</td>
                            </tr>
                        </table>
                    </td>
                    <td>
                        <table id="stattable">
                            <tr>
                                <td>Manufacturer:</td>
                                <td>{{ $data->manufacturer()->manufacturer }}</td>
                            </tr>
                            <tr>
                                <td>Model:</td>
                                <td>{{ $data->model()->model }}</td>
                            </tr>
                            <tr>
                                <td>Serial:</td>
                                <td>{{ $data->unit()->serial }}</td>
                            </tr>
                            {!! Form::open(['method' => 'POST', 'action' => 'RepairController@changegorderno']) !!}
                            {!! Form::hidden('repair_id', $data->id) !!}
                            <tr>
                                <td>G-No:</td>
                                <td>
                                    {!! Form::text('gno', $data->g_no) !!}
                                </td>
                            </tr>
                            <tr>
                                <td>Order No:</td>
                                <td>
                                    {!! Form::text('orderno', $data->order_no) !!}
                                    {!! Form::submit('Save') !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>

                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
        <div class="pouettbl" id="pouetbox_repair">
            <h2>Spareparts</h2>
            <div class="content">
                <table class="boxtable" style="width: 100%">
                    <thead>
                        <tr>
                            <td>SAP</td>
                            <td>SAP Desc</td>
                            <td>Part No</td>
                            <td>Part Desc</td>
                            <td>Stock Price</td>
                            <td>Replace Price</td>
                            <td>SN Old</td>
                            <td>SN New</td>
                            <td colspan="2">Action</td>
                        </tr>
                    </thead>
                    <tbody>
                    @php
                        $sum_replace = 0;
                        $sum_stock = 0;
                    @endphp
                    @foreach($data->spares() as $item)
                        @php
                            $sum_replace += $item->spare->price_replace;
                            $sum_stock += $item->spare->price_stock
                        @endphp
                        {!! Form::open(['action' => 'PartsController@updateSpareSn']) !!}
                        {!! Form::hidden('sparerepair_id', $item->id) !!}
                        {!! Form::hidden('repair_id', $data->id) !!}
                        <tr>
                            <td>{{ $item->spare->sap_no }}</td>
                            <td>{{ $item->spare->sap_desc }}</td>
                            <td>{{ $item->spare->manufacturer_part_no }}</td>
                            <td>{{ $item->spare->manufacturer_part_desc }}</td>
                            <td>{{ $item->spare->price_stock }}</td>
                            <td>{{ $item->spare->price_replace }}</td>
                            <td>
                                {!! Form::text('serial_old', $item->serial_old) !!}
                            </td>
                            <td>
                                {!! Form::text('serial_new', $item->serial_new) !!}
                            </td>
                            <td>
                                {!! Form::submit('Save') !!}
                                {!! Form::close() !!}
                            </td>
                            <td>
                                {!! Form::open(['method' => 'POST', 'action' => 'PartsController@destroyFromRepair']) !!}
                                {!! Form::hidden('srid', $item->id) !!}
                                {!! Form::hidden('repair_id', $data->id) !!}
                                {!! Form::submit('Del') !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>

                    @endforeach
                    <tr>
                        <td colspan="3">KVA Max for {{ $data->customer()->customer }}: </td>

                        @if($kva)
                            <td>
                                {{ $kva->max_price }}
                            </td>
                        @else
                            <td style="background-color: #8b0000">N/A</td>
                        @endif

                        <td
                        @if($kva)
                            @if($kva->max_price <= $sum_stock)
                                style="background-color: green"
                            @elseif($kva->max_price > $sum_stock)
                                style="background-color: darkred"
                            @endif
                        @endif
                        >
                            {{ $sum_stock }}
                        </td>
                        <td
                        @if($kva)
                            @if($kva->max_price <= $sum_replace)
                                style="background-color: green"
                            @elseif($kva->max_price > $sum_replace)
                                style="background-color: darkred"
                            @endif
                        @endif
                        >
                            {{ $sum_replace }}
                        </td>
                        <td colspan="4">
                            @if($kva)
                                {{ $kva->remark }}
                            @endif
                        </td>
                    </tr>
                    </tbody>
                    <tr>
                        <td class='nav' colspan=10>
                            {!! Form::open(['action' => ['PartsController@addToRepair', $data->id]]) !!}
                            {!! Form::label('spare', 'SAP: ') !!}
                            {!! Form::text('spare') !!}
                            {!! Form::submit('Add') !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    <tr>
                        <td class="nav" colspan="10">
                            {!! Form::open(['action' => ['PartsController@addToRepair', $data->id]]) !!}
                            {!! Form::label('spare', 'SAP: ') !!}
                            {!! Form::select('spare', $spares) !!}
                            {!! Form::submit('Add') !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="pouettbl" id="pouet_repair_remarks" style="width: 100%">
            <h2>Remarks</h2>
            <div class="content" style=" text-align: center;">
                {!! Form::open(['action' => 'RepairController@storeremark']) !!}
                {!! Form::hidden('repair_id', $data->id) !!}
                @if($data->remarks == '')
                    {!! Form::textarea('remark', $remark_template, ['cols' => '100']) !!}
                @else
                    {!! Form::textarea('remark', $data->remarks, ['cols' => '100']) !!}
                @endif
                <br>
                {!! Form::submit('Submit') !!}
                {!! Form::close() !!}
            </div>
        </div>
        <div class="pouettbl" id="pouet_chage_status" style="width: 100%;">
            <h2>Change Status</h2>
            <div class="content" style="text-align: center">
                <table>
                    <tr>
                        @foreach($reasons as $i)
                            <td>
                            {!! Form::open(['action' => 'RepairController@changestate']) !!}
                            {!! Form::hidden('repair_id', $data->id) !!}
                            {!! Form::hidden('reason_id', $i->id) !!}
                            {!! Form::submit($i->reason, ['style' => 'margin-left: 15px; margin-right: 15px']) !!}
                            {!! Form::close() !!}
                            </td>
                        @endforeach
                    </tr>
                </table>

            </div>
        </div>
    </div>
@endsection
