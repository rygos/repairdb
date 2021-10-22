@extends('_layout')
@section('title', 'Show User')
@section('content')

    @if(Auth::user()->access_admin)
        <div id="prodpagecontainer">
            {{ Form::open(['action' => 'AdminController@store_user']) }}
            <div class="pouettbl" id="pouetbox_repair">
                <h2>Edit User</h2>
                <div class="content">
                    <table class="boxtable">
                        <tr>
                            <td>Name</td>
                            <td>{{ Form::text('name', $user->name) }}</td>
                        </tr>
                        <tr><td></td><td>{{ Form::submit() }}</td></tr>
                    </table>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    @else
        <div style="text-align: center;">Access Denied.</div>
    @endif
@endsection
