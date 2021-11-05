@extends('_layout')
@section('title', 'Home')
@section('content')
    @if(!is_int($new))
        @include('_partials.repair_table', $data)
        @include('_partials.new_table', $new)
    @else
        @include('_partials.repair_table', $data)
    @endif
@endsection
