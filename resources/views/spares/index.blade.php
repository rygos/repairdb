@extends('_layout')
@section('title', 'Spares')
@section('content')
    @include('_partials.spare_table', $data)
@endsection
