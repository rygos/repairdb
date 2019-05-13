<ul>
    <li><a href="{{ action('HomeController@index') }}">Home</a></li>
    <li><a href="{{ action('PartsController@index') }}">Spares</a></li>
    <li><a href="{{ action('RepairController@create') }}">Add Repair</a></li>
    <li><a href="{{ action('PartsController@create') }}">Add Spare</a></li>
    <li><a href="{{ action('ScrapeController@index') }}">Scrape</a></li>
    <li><a href="{{ action('StatsController@index') }}">Stats</a></li>
    <li><a href="{{ action('OvertimeController@index') }}">Überstunden</a></li>
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
