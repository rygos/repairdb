@extends('_layout')
@section('title', 'Home')
@section('content')
@include('_partials.repair_table', $data)
    @isset($new)
        @include('_partials.new_table', $new)
    @endisset
@endsection
