@extends('master')
@section('sideber')
    @parent
    <p>This is the line of subline</p>
@endsection

@section('component')
    <h1>This is the About Page</h1>
    @php
        $first_name = 'Shakil Ahmed Khan';
        echo $first_name;
    @endphp
@endsection