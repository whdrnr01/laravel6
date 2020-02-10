@extends('layout')

@section('title')
    Create Task
@endsection

@section('content')
    <h1 class="text-4xl text-center font-bold">Create Task</h1>
    <div class="mt-4 px-64">
        <form action="/tasks" method="POST">
            @csrf
            <label for="title" class="block font-bold">Title</label>
        <input type="text" name="title" id="title" class="border-2 rounded py-3 @error('title') border-2 border-red-800 @enderror" value="{{ old('title')?old('title'):'' }}">
            @error('title')
                <small class="text-red-600"> {{ $message }}</small>
            @enderror

            <label for="body" class="block font-bold">Body</label>
            <textarea name="body" id="body" cols="30" rows="10" class="py-4 border-2 border-gray-400 rounded @error('body') border-2 border-red-800 @enderror">{{ old('body')?old('body'):'' }}</textarea>
            @error('body')
                <small class="text-red-600"> {{ $message }}</small>
            @enderror            

            <div class="mt-5">
                <button class="font-bold bg-blue-500 hover:bg-blue-800 text-white py-2 px-4">Submit</button>
            </div>
        </form>
    </div>
@endsection