@extends('layout')

@section('title')
    Task Show
@endsection

@section('content')
    <div class="p-64">
        <h3 class="font-bold text-2xl"> {{ $task->title }}</h3>
        <p class="text-sm">created at {{ $task->created_at}}</p>
        <p class="text-lg">
            {{ $task->body }}
        </p>
        <div class="mt-5">
            <a href="/tasks/{{$task->id }}/edit" class="bg-blue-500 hover:bg-blue-600 py-2 px-4 text-white rounded">Edit</a>
            <form action="/tasks/{{$task->id }}" method="post" class="float-right">
                @csrf
                @method('DELETE')
                <button class="bg-red-500 hover:bg-red-600 py-2 px-4 text-white rounded">Delete</button>
            </form>
        </div>
    
    </div>         
@endsection