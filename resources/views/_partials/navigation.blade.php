<ul>
    <li><a href="{{ action('HomeController@index') }}">Home</a></li>

    @if(Auth::user()->access_stats == 1)
    <li><a href="{{ action('PartsController@index') }}">Spares</a></li>
    @endif

    @if(Auth::user()->access_repairs == 1)
    <li><a href="{{ action('RepairController@create') }}">Add Repair</a></li>
    @endif

    @if(Auth::user()->access_parts == 1)
    <li><a href="{{ action('PartsController@create') }}">Add Spare</a></li>
    @endif

    @if(Auth::user()->access_scrape == 1)
    <li><a href="{{ action('ScrapeController@index') }}">Scrape</a></li>
    @endif

    @if(Auth::user()->access_stats == 1)
    <li><a href="{{ action('StatsController@index') }}">Stats</a></li>
    @endif

    @if(Auth::user()->access_xcharge == 1)
        <li><a href="{{ action('XChargeController@index') }}">XCharge</a></li>
    @endif

    @if(Auth::user()->access_overtime == 1)
    <li><a href="{{ action('OvertimeController@index') }}">Überstunden</a></li>
    @endif

    <li>
        {!! Form::open(['method' => 'POST', 'action' => 'SearchController@searchProcess', 'style' => 'display: inline']) !!}
        {!! Form::text('term') !!}
        {!! Form::submit('Search') !!}
        {!! Form::close() !!}
    </li>
    <li>
        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
            Logout
        </a>
    </li>
</ul>

<form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>
