<table id='pouetbox_packlist' class="boxtable pagedtable">
    <tr class="sortable">
        <th>PACKAGE</th>
        <th>UNITS</th>
        <th>DATE</th>
    </tr>
    @foreach($packs as $item)
        <tr>
            <td><a href="{{ action('ScrapeController@index', $item->package) }}">{{ $item->package }}</a></td>
            <td>{{ \App\Models\Scrap::wherePackage($item->package)->get()->count() }}</td>
            <td>{{ \App\Models\Scrap::wherePackage($item->package)->first()->scrape_date }}</td>
        </tr>
    @endforeach
</table>

<table id='pouetbox_prodlist' class='boxtable pagedtable'>
    <tr class="sortable">
        <th>NO</th>
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
        <td></td>
        <td>{!! Form::text('serial') !!}</td>
        <td>{!! Form::text('imei') !!}</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>{!! Form::submit('Send') !!}</td>
    </tr>
    {!! Form::close() !!}
    @php $i = 0; @endphp
    @foreach($data as $item)
        @php
        $i += 1;
        if($item->unit){
            $model = App\Models\Model::whereId($item->unit->model_id)->first();
            $repair = App\Models\Repair::whereUnitId($item->unit->id)->first();
        }
        @endphp
        <tr>
            <td>{{ $i }}</td>
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
            <td>{{ $item->scrape_date }}</td>
            <td></td>
        </tr>
    @endforeach
    <tr class="sortable">
        <td colspan="11"></td>
        <td><a href="{{ action('ScrapeController@create_pack') }}">Create Package</a></td>
    </tr>
</table>
