@if(Auth::user()->access_parts == 1)
    @php
        //$data = \App\Models\SparesToRepair::where('status', '!=', 5)->get();
    @endphp
    <table id="pouetbox_prodlist" class="boxtable pagedtable">
        <tr class="sortable">
            <th>ID</th>
            <td>Status</td>
            <td>KBB</td>
            <td>KGB</td>
            <td>Part No</td>
            <td>Part Desc</td>
        </tr>
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
            </tr>
        @endforeach
    </table>
@else
    <center>Access Denied.</center>
@endif
