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
                            <td>Serial:</td>
                            <td>{!! Form::text('serial', null, ['onchange' => 'checkeeee(this.value)', 'id' => 'serial']) !!}</td>
                        </tr>
                        <tr>
                            <td>ZLB Start Date:</td>
                            <td>{!! Form::date('zlb_created_at') !!}</td>
                        </tr>
                        <tr>
                            <td>Repair Start:</td>
                            <td>{!! Form::date('started_at', date('d.m.Y'), array('class'=>'form-control date-picker')) !!}</td>
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
                        <tr id="hide_manu">
                            <td>Manufacturer:</td>
                            <td>{!! Form::select('manufacturer', $manu) !!} {!! Form::text('manufacturer_text') !!}</td>
                        </tr>
                        <tr id="hide_model">
                            <td>Model:</td>
                            <td>{!! Form::select('model', $model) !!} {!! Form::text('model_text') !!}</td>
                        </tr>
                        <tr id="hide_model_type">
                            <td>Model Type:</td>
                            <td>{!! Form::select('model_type', $model_type) !!}</td>
                        </tr>
                        <tr>
                            <td>Customer:</td>
                            <td>{!! Form::select('customer', $customer) !!} {!! Form::text('customer_text') !!}</td>
                        </tr>
                        <tr>
                            <td>Repair Type:</td>
                            <td>{!! Form::select('repair_type', $rep_type) !!} {!! Form::text('repair_type_text') !!}</td>
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

        <script>
            function checkeeee(eeee){
                $.ajax({
                   url: '/data/checkeeee',
                   type: 'POST',
                   data: {
                       "_token": "{{ csrf_token() }}",
                       eeee: eeee
                   },
                }).done(function(response){
                    if(response == "FALSE"){
                        $('#hide_manu').show();
                        $('#hide_model').show();
                        $('#hide_model_type').show();
                        $('#serial').css("background-color", "white");
                    }else {
                        $('#hide_manu').hide();
                        $('#hide_model').hide();
                        $('#serial').css("background-color", "green");
                    }
                });
            }
        </script>
    </div>
@endsection
