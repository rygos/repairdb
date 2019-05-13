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
        @php
        if($item->unit){
            $model = App\Models\Model::whereId($item->unit->model_id)->first();
            $repair = App\Models\Repair::whereUnitId($item->unit->id)->first();
        }
        @endphp
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->serial }}</td>
            <td>{{ $item->imei }}</td>
            @if($item->unit)
                <td>{{ $model->model }}</td>
                <td>{{ $repair->rminst()->calltype()->type }}</td>
                <td>{{ $repair->rminst()->rminst }}</td>
                <td>{{ $repair->customer()->customer }}</td>
            @else
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            @endif
            <td>{{ $item->package }}</td>
            <td>{{ $item->scraped }}</td>
            <td></td>
            <td></td>
        </tr>
    @endforeach
</table>
