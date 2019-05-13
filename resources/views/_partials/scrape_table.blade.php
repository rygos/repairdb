<table id='pouetbox_prodlist' class='boxtable pagedtable'>
    <tr class="sortable">
        <th>ID</th>
        <th>SERIAL</th>
        <th>IMEI</th>
        <th>MODEL</th>
        <th>CALL-TYPE</th>
        <th>RMINST</th>
        <th>CUSTOMER</th>
        <th>PACK</th>
        <th>SCRAPED</th>
        <th>SCRAPE DATE</th>
        <th>ACTION</th>
    </tr>

    {!! Form::open(['action' => 'ScrapeController@store']) !!}
    <tr>
        <td></td>
        <td>{!! Form::text('serial') !!}</td>
        <td>{!! Form::text('imei') !!}</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>{!! Form::text('pack') !!}</td>
        <td></td>
        <td></td>
        <td>{!! Form::submit('Send') !!}</td>
    </tr>
    {!! Form::close() !!}

    @foreach($data as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->serial }}</td>
            <td>{{ $item->imei }}</td>
            <td>{{ App\Models\Model::whereId($item->unit->model_id)->first()->model }}</td>
            <td>{{ App\Models\Repair::whereUnitId($item->unit->id)->first()->rminst()->calltype()->type }}</td>
            <td>{{ App\Models\Repair::whereUnitId($item->unit->id)->first()->rminst()->rminst }}</td>
            <td>{{ App\Models\Repair::whereUnitId($item->unit->id)->first()->customer()->customer }}</td>
            <td>{{ $item->package }}</td>
            <td>{{ $item->scraped }}</td>
            <td></td>
            <td></td>
        </tr>
    @endforeach
</table>
