@extends('layout')

@section('title')
    Edit Task
@endsection

@section('content')
    <h1 class="text-4xl text-center font-bold">Create Task</h1>
    <div class="mt-4 px-64">
        <form action="/tasks/{{ $task->id }}" method="POST">
            @csrf
            @method('PUT')
            <label for="title" class="block font-bold">Title</label>
            <input type="text" name="title" id="title" class="border-2 rounded p-2" value="{{ $task->title }}">

            <label for="body" class="block font-bold">Body</label>
            <textarea name="body" id="body" cols="30" rows="10" class="p-2 border-2 border-gray-400 rounded">{{ $task->body }}</textarea>

            <div class="mt-5">
                <button class="font-bold bg-blue-500 hover:bg-blue-800 text-white py-2 px-4">Submit</button>
            </div>
        </form>
    </div>
@endsection