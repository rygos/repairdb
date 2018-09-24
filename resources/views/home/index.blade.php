@extends('_layout')
@section('title', 'Home')
@section('content')
@include('_partials.repair_table', $data)
@endsection