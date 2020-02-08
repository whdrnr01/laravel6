@extends('layout')

@section('title')
    Hello
@endsection

@section('content')
    <h1>Hello</h1>
    <ul>
        @foreach ($fruits as $fruit)
            <li>{{ $fruit }}</li>
        @endforeach
    </ul>

@endsection