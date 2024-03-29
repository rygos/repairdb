@if(Auth::check() and Auth::user()->access_parts == 1)
<table id="pouetbox_prodlist" class="boxtable pagedtable">
    <tr class="sortable">
        <th>ID</th>
        <th>Manufacturer</th>
        <th>Model</th>
        <th>Part No</th>
        <th>Part Desc</th>
        <th>Stock Price</th>
        <th>Repl. Price</th>
        <th>Times used</th>
    </tr>
    @foreach($data as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->manufacturer()->manufacturer }}</td>
            <td>{{ $item->model()->model }}</td>
            <td>{{ $item->manufacturer_part_no }}</td>
            <td>{{ $item->manufacturer_part_desc }}</td>
            <td>{{ $item->price_stock }}</td>
            <td>{{ $item->price_replace }}</td>
            <td>{{ \App\Models\SparesToRepair::whereSpareId($item->id)->count() }}</td>
        </tr>
    @endforeach
</table>
@else
    <center>Access Denied.</center>
@endif
