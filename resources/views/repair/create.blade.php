@extends('_layout')
@section('title', 'Create new Repair')
@section('content')
    <div id="prodpagecontainer">
        <table id="pouetbox_prodmain">
            <tbody>
            <tr id="prodheader">
                <th colspan='1'>
                    <span id='title'><big>Add Repair</big></span>
                    <div id='nfo'></div>
                </th>
            </tr>
            <tr>
                <td>
                    {!! Form::open(['action' => 'RepairController@store']) !!}
                    <table id="stattable">
                        <tr>
                            <td>ZLB Start Date:</td>
                            <td>{!! Form::date('zlb_created_at') !!}</td>
                        </tr>
                        <tr>
                            <td>Repair Start:</td>
                            <td>{!! Form::date('started_at') !!}</td>
                        </tr>
                        <tr>
                            <td>RMINST:</td>
                            <td>{!! Form::text('rminst') !!}</td>
                        </tr>
                        <tr>
                            <td>ZLB:</td>
                            <td>{!! Form::text('zlb') !!}</td>
                        </tr>
                        <tr>
                            <td>Call Type:</td>
                            <td>{!! Form::select('call_type', $call_type) !!}</td>
                        </tr>
                        <tr>
                            <td>Manufacturer:</td>
                            <td>{!! Form::select('manufacturer', $manu) !!} {!! Form::text('manufacturer_text') !!}</td>
                        </tr>
                        <tr>
                            <td>Model:</td>
                            <td>{!! Form::select('model', $model) !!}</td>
                        </tr>
                        <tr>
                            <td>Customer:</td>
                            <td>{!! Form::select('customer', $customer) !!}</td>
                        </tr>
                        <tr>
                            <td>Repair Type:</td>
                            <td>{!! Form::select('repair_type', $rep_type) !!}</td>
                        </tr>
                        <tr>
                            <td>Serial:</td>
                            <td>{!! Form::text('serial') !!}</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>{!! Form::submit('Submit') !!}</td>
                        </tr>

                    </table>
                    {!! Form::close() !!}
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
