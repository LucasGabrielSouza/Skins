@extends('inventory.inventory');

@section('content')

@foreach ($all as $items)
    {{$items}}
@endforeach

@endsection