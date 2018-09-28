<ul>
    <li><a href="{{ action('HomeController@index') }}">Home</a></li>
    <li><a href="{{ action('RepairController@create') }}">Add Repair</a></li>
    <li><a href="{{ action('PartsController@create') }}">Add Spares</a></li>
    <li>
        {!! Form::open(['method' => 'POST', 'action' => 'SearchController@searchProcess', 'style' => 'display: inline']) !!}
        {!! Form::text('term') !!}
        {!! Form::submit('Search') !!}
        {!! Form::close() !!}
    </li>
</ul>