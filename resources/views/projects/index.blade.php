@extends('layout')

@section('content')
    <h1>Project List</h1>

    @foreach ($projects as $project)
        <div>
            <h4>{{ $project->title }}</h4>
            <p>{{ $project->description }}</p>
        </div>
    @endforeach


@endsection