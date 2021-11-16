@extends('_layout')
@section('title', 'DOA')
@section('content')
    @if(Auth::check() and Auth::user()->access_doa == 1)
        <div id="prodpagecontainer">
            <div class="pouettbl" id="pouetbox_doa">
                <h2>DOAs</h2>
                <div class="content">
                    <table class="boxtable pagedtable">
                        <tr>
                            <th>Serial</th>
                            <th>Service Order</th>
                            <th>SAP No</th>
                            <th>SAP Desc</th>
                            <th>Doa Description</th>
                            <th>Technician</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                        <form method="get" action="{{ action('DOAController@index_all') }}" >
                            @csrf
                            <tr>
                                <td colspan="3">Date from: <input type="date" id="start" name="from_date" value="{{ \Carbon\Carbon::parse($from_date)->format('Y-m-d') }}">
                                </td>
                                <td colspan="3">Date to: <input type="date" id="end" name="to_date" value="{{ \Carbon\Carbon::parse($to_date)->format('Y-m-d') }}"></td>
                                <td colspan="2"><button type="submit" value="Select">Select</button></td>
                            </tr>
                        </form>
                        @foreach($data as $i)
                            <tr>
                                <td>
                                    @if(\App\Models\Unit::whereSerial($i->serial)->count() == 0)
                                        {{ $i->serial }}
                                    @else
                                        <a href="{{ action('SearchController@search', [ $i->serial ]) }}">{{ $i->serial }}</a>
                                    @endif
                                </td>
                                <td>
                                    @if(\App\Models\Rminstzlb::whereRminst($i->service_order)->count() == 0)
                                        {{ $i->service_order }}
                                    @else
                                        <a href="{{ action('SearchController@search', [ $i->service_order ]) }}">{{ $i->service_order }}</a>
                                    @endif
                                </td>
                                <td>{{ $i->sap_no }}</td>
                                <td>{{ @\App\Models\DoaSpeedItem::whereSapNo($i->sap_no)->first()->sap_desc }}</td>
                                <td>{{ $i->doa_description }}</td>
                                <td>{{ \App\Models\User::whereId($i->user_id)->first()->name }}</td>
                                <td>{{ $i->created_at }}</td>
                                <td>
                                    @if(Auth::user()->access_admin or Auth::id() == $i->user_id)
                                        <a href="{{ action('DOAController@delete', [$i->id]) }}">delete</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    @else
        <div style="text-align: center;">Access Denied.</div>
    @endif
@endsection
