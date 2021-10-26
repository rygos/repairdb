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
                        {{ Form::hidden('id', $user->id) }}
                        <tr>
                            <td>Name:</td>
                            <td>{{ Form::text('name', $user->name) }}</td>
                        </tr>
                        <tr>
                            <td>Email:</td>
                            <td>{{ Form::text('email', $user->email) }}</td>
                        </tr>
                        <tr>
                            <td colspan="2">Permissions</td>
                        </tr>
                        <tr>
                            <td>Überstunden Panel:</td>
                            <td>{{ Form::checkbox('access_overtime', $user->access_overtime, $user->access_overtime) }}</td>
                        </tr>
                        <tr>
                            <td>XCharge:</td>
                            <td>{{ Form::checkbox('access_xcharge', $user->access_xcharge, $user->access_xcharge) }}</td>
                        </tr>
                        <tr>
                            <td>Verschrottung:</td>
                            <td>{{ Form::checkbox('access_scrape', $user->access_scrape, $user->access_scrape) }}</td>
                        </tr>
                        <tr>
                            <td>Ersatzteile:</td>
                            <td>{{ Form::checkbox('access_parts', $user->access_parts, $user->access_parts) }}</td>
                        </tr>
                        <tr>
                            <td>Reports/Faktura:</td>
                            <td>{{ Form::checkbox('access_reports', $user->access_reports, $user->access_reports) }}</td>
                        </tr>
                        <tr>
                            <td>Repair:</td>
                            <td>{{ Form::checkbox('access_repairs', $user->access_repairs, $user->access_repairs) }}</td>
                        </tr>
                        <tr>
                            <td>Admin:</td>
                            <td>{{ Form::checkbox('access_admin', $user->access_admin, $user->access_admin) }}</td>
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
