@extends('_layout')
@section('title', 'Add Sparepart')
@section('content')
    <div id="prodpagecontainer">
        <table id="pouetbox_prodmain">
            <tbody>
            <tr id="prodheader">
                <th colspan='1'>
                    <span id='title'><big>Add Sparepart</big></span>
                    <div id='nfo'></div>
                </th>
            </tr>
            <tr>
                <td>
                    {!! Form::open(['action' => 'PartsController@store']) !!}
                    <table id="stattable">
                        <tr>
                            <td>SAP No:</td>
                            <td>{!! Form::text('sap_no') !!}</td>
                        </tr>
                        <tr>
                            <td>SAP Desc:</td>
                            <td>{!! Form::text('sap_desc') !!}</td>
                        </tr>
                        <tr>
                            <td>Manufacturer:</td>
                            <td>{!! Form::select('manufacturer', $manu) !!}</td>
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
                            <td>Part No:</td>
                            <td>{!! Form::text('part_no') !!}</td>
                        </tr>
                        <tr>
                            <td>Part Desc:</td>
                            <td>{!! Form::text('part_desc') !!}</td>
                        </tr>
                        <tr>
                            <td>Remarks:</td>
                            <td>{!! Form::text('remarks') !!}</td>
                        </tr>
                        <tr>
                            <td>Replacement Price:</td>
                            <td>{!! Form::text('price_replace','0,00') !!}</td>
                        </tr>
                        <tr>
                            <td>Stock Price:</td>
                            <td>{!! Form::text('price_stock','0,00') !!}</td>
                        </tr>
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