@extends('_layout')
@section('title', 'Repair - '.$data->rminst()->rminst.' / '.$data->rminst()->zlb)
@section('content')
    @if(Auth::check() and Auth::user()->access_repairs == 1)
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
                        <span id='title'>
                            <big>{{ 'Repair - '.$data->rminst()->rminst.' / '.$data->rminst()->zlb }}</big>
                        </span>
                        <div id='nfo' onclick="update_so()"><span>EDIT SO</span></div>
                        <script>
                            function update_so() {
                                var newso = parseInt(prompt("Please enter the new SO"));
                                if (newso > 1000000 && newso < 99999999){
                                    if (isNaN(newso)){
                                        alert("Please only enter numbers with 8 digits")
                                    }else{
                                        var xhttp = new XMLHttpRequest();
                                        xhttp.open("POST", "{{ action('RepairController@update_so') }}", true);
                                        xhttp.setRequestHeader("X-CSRF-TOKEN", "{{ csrf_token() }}");
                                        xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                                        xhttp.onreadystatechange = function() {//Call a function when the state changes.
                                            if(xhttp.readyState == 4 && xhttp.status == 200) {
                                                location.reload();
                                            }
                                        }
                                        xhttp.send("sooldid={{$data->rminst()->id}}&sonew="+newso+"&repid={{$data->id}}");
                                    }
                                }else{
                                    alert("Please only enter numbers with 8 digits")
                                }
                            }
                        </script>
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
                                @if(!$data->closing_reason_id)
                                @else
                                    <td>Repair started at:</td>
                                    <td>{{ Carbon\Carbon::parse($data->started_at)->toDateString() }}</td>
                                @endif
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
                                {{ Form::open(['method' => 'POST', 'action' => 'RepairController@change_technician']) }}
                                {{ Form::hidden('repair_id', $data->id) }}
                                <td>{!! Form::select('tech_id', $technicians, $data->user_id) !!} {!! Form::submit() !!}</td>
                                {{ Form::close() }}
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
                        @php
                            $doas = \App\Models\DOA::whereSerial($data->unit()->serial);
                            $oldreps = \App\Models\Unit::whereSerial($data->unit()->serial);
                        @endphp
                        @if($doas->count() != 0)
                            <table class="pouettbl boxtable">
                                <tr>
                                    <th colspan="4">DOAs</th>
                                </tr>
                                @foreach($doas->get() as $d)
                                    <tr>
                                        <td>{{ $d->created_at }}</td>
                                        <td>{{ $d->service_order }}</td>
                                        <td>{{ \App\Models\User::whereId($d->user_id)->first()->name }}</td>
                                        <td>{{ $d->doa_description }}</td>
                                    </tr>
                                @endforeach
                            </table>
                        @endif

                        @if($oldreps->count() > 1)
                            TESTOLDREPS
                        @endif
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
                            <td>Status</td>
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
                            $scrap_pack = '';
                            $scrap = \App\Models\Scrap::whereSerial($item->serial_old)->first();
                            if($scrap){
                                $scrap_pack = $scrap->package;
                                if($scrap->scraped == 1){
                                    $scrap_done = 'style="background-color: red"';
                                }else{
                                    $scrap_done = 'style="background-color: orange"';
                                }
                            }else{
                                $scrap_done = '';
                            }

                            $stat_color = '';
                            $stat_text = '';
                            switch($item->status){
                                case 0:
                                    $stat_color = 'none';
                                    $stat_text = 'NEW';
                                    break;
                                case 1:
                                    $stat_color = 'orange';
                                    $stat_text = 'ORDERED';
                                    break;
                                case 2:
                                    $stat_color = 'orange';
                                    $stat_text = 'DELIVERY';
                                    break;
                                case 3:
                                    $stat_color = 'green';
                                    $stat_text = 'DELIVERED';
                                    break;
                                case 4:
                                    $stat_color = 'yellow';
                                    $stat_text = 'USED';
                                    break;
                                case 5:
                                    $stat_color = 'red';
                                    $stat_text = 'PROCESSED';
                                    break;
                            }

                        @endphp
                        {!! Form::open(['action' => 'PartsController@updateSpareSn']) !!}
                        {!! Form::hidden('sparerepair_id', $item->id) !!}
                        {!! Form::hidden('repair_id', $data->id) !!}
                        <tr>
                            <td style="background-color: {!! $stat_color !!}">{{ $stat_text }}</td>
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
                                @if($scrap)
                                    @if($scrap_pack == '')
                                        {!! Form::select('type_id', ['0' => 'N/A', '1' => 'Austausch', '2' => 'Verbrauch', '3' => 'DOA', '4' => 'Ungenutzt'], $item->type_id) !!}
                                    @else
                                        <a href="{{ action('ScrapeController@index', $scrap_pack) }}">{{ $scrap_pack }}</a>
                                    @endif
                                @else
                                    {!! Form::select('type_id', ['0' => 'N/A', '1' => 'Austausch', '2' => 'Verbrauch', '3' => 'DOA', '4' => 'Ungenutzt'], $item->type_id) !!}
                                @endif
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
        <div class="pouettbl" id="pouet_repair_remarks" style="width: 100%; text-align: center;">
            <h2>Remarks</h2>
            {!! Form::open(['action' => 'RepairController@storeremark', 'enctype' => 'multipart/form-data']) !!}
            {!! Form::hidden('repair_id', $data->id) !!}
            <table class="boxtable" style="width: 100%">
                <tr>
                    <td>
                        <div class="content" style=" text-align: center;">

                            @if($data->remarks == '')
                                {!! Form::textarea('remark', $remark_template, ['cols' => '100', 'id' => 'remark']) !!}
                            @else
                                {!! Form::textarea('remark', $data->remarks, ['cols' => '100', 'id' => 'remark']) !!}
                            @endif
                        </div>
                    </td>
                    <td>
                        <div class="content">
                            <table>
                                <tr>
                                    <td>Kostenpflichtig:</td>
                                    <td>{{ Form::text('costs', $data->costs) }}</td>
                                </tr>
                                <tr>
                                    <td>Hersteller-Garantie:</td>
                                    <td>{{ Form::checkbox('warranty', ($data->warranty == 1), ($data->warranty == 1)) }}</td>
                                </tr>
                                <tr>
                                    <td>CC-Garantie:</td>
                                    <td>{{ Form::checkbox('cc_warranty', ($data->cc_warranty == 1), ($data->cc_warranty == 1)) }}</td>
                                </tr>
                                <tr>
                                    <td>Fremdverschulden:</td>
                                    <td>{{ Form::checkbox('thirdpartydamage', ($data->thirdpartydamage == 1), ($data->thirdpartydamage == 1)) }}</td>
                                </tr>
                            </table>
                            <br>
                            <table>
                                <tr>
                                    <td>KVA-Attachment:</td>
                                    <td>
                                        @foreach($kvafiles as $i)
                                            <a href="{{ action('RepairController@download_kva', [$i->id]) }}">{{ $i->name }}</a> - <a href="{{ action('RepairController@delete_kva', [$i->id]) }}" onclick="return confirm('Sicher das die Datei gelöscht werden soll?')">[del]</a><br>
                                        @endforeach
                                        <br>
                                            {{ Form::file('file') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td>KVA-Fee:</td>
                                    <td>{{ Form::checkbox('kva_fee', ($data->kva_fee == 1), ($data->kva_fee == 1)) }}</td>
                                </tr>
                                <tr>
                                    <td>KVA-Total Costs:</td>
                                    <td>{{ Form::text('kva_costs', $data->kva_costs) }}</td>
                                </tr>
                            </table>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center">
                        <button onclick="add_action()">Add Action</button>
                        {!! Form::submit('Submit') !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            </table>
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
                                        @if($i->reason == "SUCCESS" or $i->reason == "NDF")
                                            {{ Form::open(['action' => 'RepairController@changestate', 'onsubmit' => "return confirm('Ist der Auftrag wirklich abgeschlossen?');"]) }}
                                        @else
                                            {!! Form::open(['action' => 'RepairController@changestate']) !!}
                                        @endif
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

        @include('repair.partials.file_upload')

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
    @else
        <div style="text-align: center;">Access Denied.</div>
    @endif
@endsection
