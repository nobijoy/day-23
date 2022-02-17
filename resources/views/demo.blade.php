@extends('master')

@section('title')
    BITM
@endsection()

@section('body')
    <h1>{{ $a }}</h1>
    <h1>{{ $b }}</h1>

    @foreach($c as $key => $value)
        @foreach($value as $item)
    <span>{{ $item }}</span> </br>
        @endforeach

    @endforeach
@endsection()
