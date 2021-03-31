@extends('_layout')
@section('title', 'Sparepart WE')
@section('content')
    <div id="prodpagecontainer">
        <table id="pouetbox_prodmain">
            <tbody>
            <tr id="prodheader">
                <th colspan='1'>
                    <span id='title'><big>Sparepart WE</big></span>
                    <div id='nfo'></div>
                </th>
            </tr>
            <tr>
                <td>
                    {!! Form::open(['action' => 'PartsController@store_we']) !!}
                    <table id="stattable">
                        @if($step == 1)
                            {!! Form::hidden('step', '1') !!}
                            <tr>
                                <td>Part No:</td>
                                <td>{!! Form::text('part_no') !!}</td>
                            </tr>
                        @elseif($step == 2)
                            {!! Form::hidden('step', '2') !!}
                            {!! Form::hidden('spare_id', $spare_id) !!}
                            @php
                                $part = \App\Models\SparesToRepair::whereId($spare_id)->first();
                                $repair = \App\Models\Repair::whereId($part->repair_id)->first();
                                $rminst = \App\Models\Rminstzlb::whereId($repair->rminstzlb_id)->first();
                                $spare = \App\Models\Spare::whereId($part->spare_id)->first();
                            @endphp
                            <tr>
                                <td><h2>ServiceOrder:</h2></td>
                                <td><h2>{{ $rminst->rminst }}</h2></td>
                            </tr>
                            <tr>
                                <td><h2>ZLB:</h2></td>
                                <td><h2>{{ $rminst->zlb }}</h2></td>
                            </tr>
                            <tr>
                                <td>Part No:</td>
                                <td>{!! $spare->manufacturer_part_no !!}</td>
                            </tr>
                            <tr>
                                <td>Part Desc:</td>
                                <td>{!! $spare->manufacturer_part_desc !!}</td>
                            </tr>
                            <tr></tr>
                            <tr>
                                <td>Serial No:</td>
                                <td>{!! Form::text('serial_no') !!}</td>
                            </tr>
                        @endif
                        <tr>
                            <td></td>
                            <td>{{ Form::submit('Submit') }}</td>
                        </tr>

                    </table>
                    {!! Form::close() !!}
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
