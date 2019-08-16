@extends('_layout')
@section('title', 'Repair - '.$data->rminst()->rminst.' / '.$data->rminst()->zlb)
@section('content')
    <div id="prodpagecontainer">
        <table id="pouetbox_prodmain">
            <tbody>
                <tr id="prodheader">
                    @if(!$data->closing_reason_id)
                        @php $style = '' @endphp
                    @else
                        @php $reason = \App\Models\ClosingReason::whereId($data->closing_reason_id)->first()->reason; @endphp
                        @switch ($reason)
                            @case('KVA - ABGELEHNT')
                                @php $style = 'style="background-color: red;"' @endphp
                                @break
                            @case('KVA - GENEHMIGT')
                                @php $style = 'style="background-color: green;"' @endphp
                                @break
                            @default
                                @php $style = '' @endphp
                        @endswitch
                    @endif
                    <th colspan='3' {!! $style !!}>
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
                                    {!! Form::text('gno', $data->g_no, ['id' => 'gno']) !!}
                                </td>
                            </tr>
                            <tr>
                                <td>Order No:</td>
                                <td>
                                    {!! Form::text('orderno', $data->order_no, ['id' => 'ono']) !!}
                                    {!! Form::submit('Save') !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>

                        </table>
                    </td>
                    <td>
                        Documentation: <br>
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
                            <td>Type</td>
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
                            $sum_stock += $item->spare->price_stock;
                            $scrap_done = '';
                            $scrap = \App\Models\Scrap::whereSerial($item->serial_old)->first();
                            if($scrap){
                                if($scrap->scraped == 1){
                                    $scrap_done = 'style="background-color: red"';
                                }else{
                                    $scrap_done = 'style="background-color: orange"';
                                }
                            }else{
                                $scrap_done = '';
                            }
                        @endphp
                        {!! Form::open(['action' => 'PartsController@updateSpareSn']) !!}
                        {!! Form::hidden('sparerepair_id', $item->id) !!}
                        {!! Form::hidden('repair_id', $data->id) !!}
                        <tr>
                            <td {!! $scrap_done !!}>{{ $item->spare->sap_no }}</td>
                            <td {!! $scrap_done !!}>{{ $item->spare->sap_desc }}</td>
                            <td {!! $scrap_done !!}>{{ $item->spare->manufacturer_part_no }}</td>
                            <td {!! $scrap_done !!}>{{ $item->spare->manufacturer_part_desc }}</td>
                            <td {!! $scrap_done !!}>{{ $item->spare->price_stock }}</td>
                            <td {!! $scrap_done !!}>{{ $item->spare->price_replace }}</td>
                            <td {!! $scrap_done !!}>
                                {!! Form::text('serial_old', $item->serial_old, ['id' => 'sold']) !!}
                            </td>
                            <td {!! $scrap_done !!}>
                                {!! Form::text('serial_new', $item->serial_new, ['id' => 'snew']) !!}
                            </td>
                            <td {!! $scrap_done !!}>
                                {!! Form::select('type_id', ['0' => 'N/A', '1' => 'Austausch', '2' => 'Verbrauch', '3' => 'DOA'], $item->type_id) !!}
                            </td>
                            <td {!! $scrap_done !!}>
                                {!! Form::submit('Save') !!}
                                {!! Form::close() !!}
                            </td>
                            <td {!! $scrap_done !!}>
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
                        <td colspan="5">
                            @if($kva)
                                {{ $kva->remark }}
                            @endif
                        </td>
                    </tr>
                    </tbody>
                    <tr>
                        <td class='nav' colspan=11>
                            {!! Form::open(['action' => ['PartsController@addToRepair', $data->id]]) !!}
                            {!! Form::label('spare', 'SAP: ') !!}
                            {!! Form::text('spare') !!}
                            {!! Form::submit('Add') !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    <tr>
                        <td class="nav" colspan="11">
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
                    {!! Form::textarea('remark', $remark_template, ['cols' => '100', 'id' => 'remark']) !!}
                @else
                    {!! Form::textarea('remark', $data->remarks, ['cols' => '100', 'id' => 'remark']) !!}
                @endif
                <br>
                <button onclick="add_action()">Add Action</button>
                {!! Form::submit('Submit') !!}
                {!! Form::close() !!}
            </div>
        </div>

        <div class="pouettbl" id="pouet_chage_status" style="width: 100%;">
            <h2>Change Status</h2>
            <div class="content" style="text-align: center">
                <table>
                    <tr>
                        @if(!$data->closing_reason_id)
                            @php $reason = '' @endphp
                        @else
                            @php $reason = \App\Models\ClosingReason::whereId($data->closing_reason_id)->first()->reason; @endphp
                        @endif
                        @foreach($reasons as $i)
                            @if($reason == 'KVA')
                                @if(substr($i->reason, 0, 5) == 'KVA -')
                                    <td>
                                    {!! Form::open(['action' => 'RepairController@changestate']) !!}
                                    {!! Form::hidden('repair_id', $data->id) !!}
                                    {!! Form::hidden('reason_id', $i->id) !!}
                                    {!! Form::submit($i->reason, ['style' => 'margin-left: 15px; margin-right: 15px']) !!}
                                    {!! Form::close() !!}
                                    </td>
                                @endif
                            @else
                                @if(substr($i->reason, 0, 5) != 'KVA -')
                                    <td>
                                        {!! Form::open(['action' => 'RepairController@changestate']) !!}
                                        {!! Form::hidden('repair_id', $data->id) !!}
                                        {!! Form::hidden('reason_id', $i->id) !!}
                                        {!! Form::submit($i->reason, ['style' => 'margin-left: 15px; margin-right: 15px']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                @endif
                            @endif
                        @endforeach
                    </tr>
                </table>
            </div>
        </div>

        <div class="pouettbl" id="pouet_replog" style="width: 100%;">
            <h2>Repair log</h2>
            <div class="content">
                <table class="boxtable" style="width: 100%">
                    <tr class='sortable'>
                        <th>DATE</th>
                        <th>LOG</th>
                        <th>STATUS AT LOG-TIME</th>
                        <th>TECHNICIAN</th>
                    </tr>
                    @foreach($replog as $log)
                        <tr>
                            <td>{{ $log->created_at }}</td>
                            <td>{!! $log->log !!}</td>
                            @if(!$log->closing_reason_id)
                                <td style="background-color: green; color: white;">NEW</td>
                            @else
                                @php $reason = \App\Models\ClosingReason::whereId($log->closing_reason_id)->first()->reason; @endphp
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
                            <td>{{ \App\Models\User::where('id', $log->user_id)->first()->name }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>

    <script>
        function add_action() {
            var get_action = prompt("Please enter action description", "");
            var d = new Date();
            if (get_action != null) {
                document.getElementById("remark").innerHTML =
                    ("0" + d.getDate()).slice(-2) + "." + ("0"+(d.getMonth()+1)).slice(-2) + ". - Aktion: " + get_action + "\n" + document.getElementById("remark").innerHTML;
                document.getElementById("remark").style.backgroundColor = "yellow";
            }
        }
    </script>

    <script>
        jQuery('#remark').on('input propertychange paste', function() {
            document.getElementById("remark").style.backgroundColor = "yellow";
        });
        jQuery('#ono').on('input propertychange paste', function() {
            document.getElementById("ono").style.backgroundColor = "yellow";
        });
        jQuery('#snew').on('input propertychange paste', function() {
            document.getElementById("snew").style.backgroundColor = "yellow";
        });
        jQuery('#gno').on('input propertychange paste', function() {
            document.getElementById("gno").style.backgroundColor = "yellow";
        });
        jQuery('#sold').on('input propertychange paste', function() {
            document.getElementById("sold").style.backgroundColor = "yellow";
        });
    </script>
@endsection
