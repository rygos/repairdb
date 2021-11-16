@extends('_layout')
@section('title', 'DOA')
@section('content')
    @if(Auth::check() and Auth::user()->access_doa == 1)
        <div id="prodpagecontainer">
            <div class="pouettbl" id="pouetbox_repair">
                <h2>Add DOA</h2>
                <div class="content">
                    {{ Form::open(['action' => 'DOAController@store']) }}
                    <table>
                        <tr>
                            <td>Serial:</td>
                            <td>{{ Form::text('serial') }}</td>
                        </tr>
                        <tr>
                            <td>SAP-No:</td>
                            <td>{{ Form::text('sap_no') }}</td>
                        </tr>
                        <tr>
                            <td>Service Order:</td>
                            <td>{{ Form::text('so') }}</td>
                        </tr>
                        <tr>
                            <td>DOA-Description:</td>
                            <td>{{ Form::text('doa_desc') }}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>{{ Form::submit() }}</td>
                        </tr>
                    </table>
                    {{ Form::close() }}
                </div>
            </div>
            <div class="pouettbl" id="pouetbox_doa">
                <h2>Last 10 DOAs - <a href="{{ action('DOAController@index_all') }}">SHOW ALL</a></h2>
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
