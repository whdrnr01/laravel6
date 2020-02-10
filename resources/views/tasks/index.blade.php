@extends('layout')

@section('title')
    Tasks
@endsection

@section('content')
    
    <h1 class="text-4xl text-center mt-5">Tasks List</h1>
    <div class="px-56 mt-5 border-gray-600 border-t-1">
        @foreach ($tasks as $task)
            <div class="mb-5 border-blue-600 hover:bg-blue-100 border-2 rounded p-3">
                <a href="/tasks/{{ $task->id }}">
                    <span class="font-bold">{{ $task->title }}</span> 
                    <small class="float-right"> created_at {{ $task->created_at }} </small>
                </a>
            </div>

        @endforeach
    </div>

    
@endsection