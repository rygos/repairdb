@extends('_layout')
@section('title', 'Scrape')
@section('content')
    @include('_partials.scrape_table', $data)
@endsection
