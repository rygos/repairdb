@if(Auth::check() and Auth::user()->access_repairs == 1)

<table id='pouetbox_prodlist' class='boxtable pagedtable'>
    <tr class='sortable'>
        <th>NO</th>
        <th>ID</th>
        <th>ZLB-DATE</th>
        <th>START-DATE</th>
        <th>CALL-TYPE</th>
        <th>RMINST</th>
        <th>ZLB</th>
        <th>CUSTOMER</th>
        <th>SERIAL</th>
        <th>MANUFACTURER</th>
        <th>MODEL</th>
        <th>REP-TYPE</th>
        <th>PARTS</th>
        <th>G-NO</th>
        <th>ORDER</th>
        <th>STATUS</th>
        <th>REMARKS</th>
        <th>TECHNICIAN</th>
        <th>LOC</th>
    </tr>
    @php $counter = 1; @endphp
    @foreach($data as $item)

        @if(!$item->closing_reason_id)
            @php $style = '' @endphp
        @else
            @php $reason = \App\Models\ClosingReason::whereId($item->closing_reason_id)->first()->reason; @endphp
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

    <tr>
        <td  {!! $style !!}>{{ $counter }}</td>
        <td {!! $style !!}><a href="{{ action('RepairController@show', $item->id) }}">{{ $item->id }}</a></td>
        <td {!! $style !!}>{{ \Carbon\Carbon::parse($item->rminst()->zlb_created_at)->toDateString() }}</td>
        <td {!! $style !!}>
            @if(!$item->closing_reason_id) @else {{ \Carbon\Carbon::parse($item->started_at)->toDateString() }} @endif
        </td>
        <td {!! $style !!}>{{ $item->rminst()->calltype()->type }}</td>
        <td {!! $style !!}>{{ $item->rminst()->rminst }}</td>
        <td {!! $style !!}><a href="{{ action('RepairController@show', $item->id) }}">{{ $item->rminst()->zlb }}</a></td>
        <td {!! $style !!}>{{ $item->customer()->customer }}</td>
        <td {!! $style !!}>{{ $item->unit()->serial }}</td>
        <td {!! $style !!}>{{ $item->manufacturer()->manufacturer }}</td>
        <td {!! $style !!}>{{ $item->model()->model }}</td>
        <td {!! $style !!}>{{ $item->reptype()->type }}</td>
        <td {!! $style !!}>{{ $item->spares()->count() }}</td>
        <td {!! $style !!}>{{ $item->g_no }}</td>
        <td {!! $style !!}>{{ $item->order_no }}</td>
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

        <td {!! $style !!}>{{ substr($item->remarks, 0, 50) }}</td>
        <td {!! $style !!}>{{ $item->user()->name }}</td>
        <td {!! $style !!}>{{ $item->location }}</td>
    </tr>
    @php $counter += 1; @endphp
    @endforeach
    <tr>
        <td class='nav' colspan=19>
            <a href="{{ action('HomeController@index_all') }}">
                Show all open repairs
            </a>
             <->
            <a href="{{ action('HomeController@index_active_hh') }}">
                Show all open HH repairs
            </a>
        </td>
    </tr>
</table>

@else
    <center>Access Denied.</center>
@endif
