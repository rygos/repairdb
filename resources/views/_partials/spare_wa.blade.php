@if(Auth::user()->access_parts == 1)
    @php
        //$data = \App\Models\SparesToRepair::where('status', '!=', 5)->get();
    @endphp
    <div id="prodpagecontainer">
        <table id="pouetbox_prodmain">
            <tbody>
            <tr id="prodheader">
                <th colspan='1'>
                    <span id='title'><big>WA Sparepart</big></span>
                    <div id='nfo'></div>
                </th>
            </tr>
            <tr>
                <td>
                    {!! Form::open(['action' => 'PartsController@show_wa', 'method' => 'get']) !!}
                    <table id="stattable">
                        <tr>
                            <td>ZLB Suche</td>
                            <td>{!! Form::text('zlb') !!}</td>
                        </tr>
                    </table>
                    {!! Form::close() !!}
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <table id="pouetbox_prodlist" class="boxtable pagedtable">
        <tr class="sortable">
            <th>ID</th>
            <td>Status</td>
            <td>KBB</td>
            <td>KGB</td>
            <td>Part No</td>
            <td>Part Desc</td>
            <td>ZLB</td>
            <td>ServiceOrder</td>
            <td>Tracking</td>
            <td>Remarks</td>
            <td>Buchen?</td>
        </tr>
        {!! Form::open(['action' => 'PartsController@store_wa']) !!}
        {!! Form::hidden('zlb', $zlb) !!}
        @foreach($data as $item)
            @php
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
            <tr>
                <td>{{ $item->id }}</td>
                <td style="background-color: {!! $stat_color !!}">{{ $stat_text }}</td>
                <td>{{ $item->serial_old }}</td>
                <td>{{ $item->serial_new }}</td>
                <td>{{ $item->spare->manufacturer_part_no }}</td>
                <td>{{ $item->spare->manufacturer_part_desc }}</td>
                @php $so = \App\Models\Rminstzlb::whereId($item->repair->rminstzlb_id)->first(); @endphp
                <td>{{ $so->zlb }}</td>
                <td>{{ $so->rminst }}</td>
                <td></td>
            </tr>

        @endforeach
        <tr>{{ Form::submit('Speichern')  }}</tr>
        {{ Form::close() }}
    </table>
@else
    <center>Access Denied.</center>
@endif
