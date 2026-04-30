<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(Project $project)
    {
        // TODO Day 5: return view('tasks.index', ['tasks' => $project->tasks]);
        // TODO Day 6: eager load — $project->load('tasks.comments', 'tasks.assignee');
        return "TaskController@index — list tasks for project {$project->id} (stub)";
    }

    public function create(Project $project)
    {
        // TODO Day 5: return view('tasks.create', ['project' => $project]);
        return "TaskController@create — create task form for project {$project->id} (stub)";
    }

    public function store(Request $request, Project $project)
    {
        // TODO Day 5: $project->tasks()->create([...]);
        // TODO Day 7: use StoreTaskRequest
        // TODO Day 11: handle file upload — Storage::disk('public')->put(...)
        return "TaskController@store — save task for project {$project->id} (stub)";
    }

    public function show(Task $task)
    {
        // TODO Day 5: return view('tasks.show', ['task' => $task]);
        return "TaskController@show — show task {$task->id} (stub)";
    }

    public function edit(Task $task)
    {
        // TODO Day 5: return view('tasks.edit', ['task' => $task]);
        // TODO Day 9: $this->authorize('update', $task);
        return "TaskController@edit — edit form for task {$task->id} (stub)";
    }

    public function update(Request $request, Task $task)
    {
        // TODO Day 5: $task->update([...]);
        // TODO Day 7: use UpdateTaskRequest
        // TODO Day 9: $this->authorize('update', $task);
        // TODO Day 11: when assigned_to_id changes, dispatch TaskAssigned mail (queued)
        return "TaskController@update — update task {$task->id} (stub)";
    }

    public function destroy(Task $task)
    {
        // TODO Day 5: $task->delete();
        // TODO Day 9: $this->authorize('delete', $task);
        return "TaskController@destroy — delete task {$task->id} (stub)";
    }
}