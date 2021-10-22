@extends('_layout')
@section('title', 'Adminpanel')
@section('content')

    @if(Auth::user()->access_admin)
        <div id="prodpagecontainer">
            <div class="pouettbl" id="pouetbox_repair">
                <h2>Administration</h2>
                <div class="content">
                    <table class="boxtable">
                        <tr>
                            <td colspan="2">Usermanagement</td>
                        </tr>
                        <tr>
                            <td>User count:</td>
                            <td>{{ $usercount }}</td>
                        </tr>
                        <tr>
                            <td>Options:</td>
                            <td><a href="{{ action('AdminController@show_users') }}">Edit Users</a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    @else
        <div style="text-align: center;">Access Denied.</div>
    @endif
@endsection
