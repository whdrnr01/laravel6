<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return view('tasks.index', [
            'tasks' => Task::latest()->get()
        ]);

    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        request()->validate([
            'title' => 'required',
            'body' => 'required'
        ]);
        Task::create([
            'title' => $request->input('title'),
            'body' => $request->input('body')
        ]);

        return redirect('/tasks');
    }

    public function update(Task $task)
    {
        $task->update([
            'title' => request('title'),
            'body' => request('body')
        ]);

        return redirect('/tasks/'.$task->id);
    }

    public function show(Task $task)
    {
        return view('tasks.show', [
            'task' => $task
        ]);
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', [ 'task' => $task]);
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect('/tasks');
    }

}
