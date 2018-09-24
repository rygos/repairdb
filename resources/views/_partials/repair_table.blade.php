<table id='pouetbox_prodlist' class='boxtable pagedtable'>
    <tr class='sortable'>
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
        <th>PARTS ORDERED</th>
        <th>STATUS</th>
        <th>REMARKS</th>
    </tr>
    @foreach($data as $item)
    <tr>
        <td><a href="{{ action('RepairController@show', $item->id) }}">{{ $item->id }}</a></td>
        <td>{{ \Carbon\Carbon::parse($item->rminst()->zlb_created_at)->toDateString() }}</td>
        <td>{{ \Carbon\Carbon::parse($item->started_at)->toDateString() }}</td>
        <td>{{ $item->rminst()->calltype()->type }}</td>
        <td><a href="{{ action('RepairController@show', $item->id) }}">{{ $item->rminst()->rminst }}</a></td>
        <td><a href="{{ action('RepairController@show', $item->id) }}">{{ $item->rminst()->zlb }}</a></td>
        <td>{{ $item->customer()->customer }}</td>
        <td>{{ $item->unit()->serial }}</td>
        <td>{{ $item->manufacturer()->manufacturer }}</td>
        <td>{{ $item->model()->model }}</td>
        <td>{{ $item->reptype()->type }}</td>
        <td>{{ $item->spares()->count() }}</td>
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
                @default
                    <td>{{ $reason }}</td>
            @endswitch
        @endif

        <td>{{ substr($item->remarks, 0, 50) }}</td>
    </tr>
    @endforeach
    <tr>
        <td class='nav' colspan=14>
            Untere Zeile
        </td>
    </tr>
</table>