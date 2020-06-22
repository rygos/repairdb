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

        @foreach($data as $item)
            <tr>
                <td>{{ $item->service_order }}</td>
                <td>{{ $item->serial }}</td>
                <td>{{ $item->cost_centre }}</td>
                <td>{{ $item->cost_element }}</td>
                <td>{{ $item->amount }}</td>
                <td>{{ $item->text }}</td>
                <td>{{ $item->charged }} ({{ $item->charged_date }})</td>
            </tr>
        @endforeach
    </table>
@else
    <center>Access Denied.</center>
@endif
