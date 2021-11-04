@extends('_layout')
@section('title', 'Home')
@section('content')
    @if($new == 0)
        @include('_partials.repair_table', $data)
    @else
        @include('_partials.repair_table', $data)
        @include('_partials.new_table', $new)
    @endif
@endsection
