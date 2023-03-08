<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;


class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index')->with(['tasks' => $tasks]);
    }
    public function create()
    {
        $tasks = Task::all();
        return view('tasks.create', ['tasks' => $tasks]);
    }

    public function store(StoreTaskRequest $request)
    {
        $request->validated();
        Task::create([
            'name' => $request->name,
            'description' => $request->description,
            'status' => $request->status,
        ]);
        return redirect()->route('tasks')->with('massage', 'Created Successfully');
    }

    public function show(Task $task)
    {
        return View('tasks.show', ['task' => $task]);
    }

    public function edit(Task $task)
    {
        return View('tasks.edit', ['task' => $task]);
    }

    public function update(UpdateTaskRequest $request, Task $task)
    {
        $data =  $request->validated();
        $task->update($data);
        return redirect()->route('tasks.show', $task)->with('massage', 'Updated Successfully');
    }
    public function destory(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks')->with('massage', 'Deleted Successfully');
    }
}
