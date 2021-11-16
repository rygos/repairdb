@extends('_layout')
@section('title', 'Show Users')
@section('content')

    @if(Auth::check() and Auth::user()->access_admin)
        <div id="prodpagecontainer">
            <div class="pouettbl" id="pouetbox_repair">
                <h2>All Users</h2>
                <div class="content">
                    <table class="boxtable">
                        <tr>
                            <td>Name</td>
                            <td>EMail</td>
                            <td>Registered at</td>
                            <td>Technician</td>
                            <td>Action</td>
                        </tr>
                        @foreach($users as $u)
                        <tr>
                            <td>{{ $u->name }}</td>
                            <td>{{ $u->email }}</td>
                            <td>{{ $u->created_at }}</td>
                            <td>
                                @if($u->technician == 1)
                                    YES
                                @else
                                    NO
                                @endif
                            </td>
                            <td><a href="{{ action('AdminController@show_user', [$u->id]) }}">Edit</a></td>
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
