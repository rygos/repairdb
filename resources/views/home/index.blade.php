@extends('_layout')
@section('title', 'Home')
@section('content')
    @if(isset($new))
        @include('_partials.repair_table', $data)
    @else
        @include('_partials.repair_table', $data)
        @include('_partials.new_table', $new)
    @endif
@endsection
