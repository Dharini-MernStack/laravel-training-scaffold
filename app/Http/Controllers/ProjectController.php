<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        // TODO Day 2 (stub): placeholder — replace with real view on Day 5
        // TODO Day 5: return view('projects.index', ['projects' => Project::all()]);
        // TODO Day 6: add eager loading — Project::with('tasks')->get() — to fix N+1
        // TODO Day 8: scope to logged-in user — auth()->user()->projects
        return 'ProjectController@index — list all projects (stub)';
    }

    public function create()
    {
        // TODO Day 5: return view('projects.create');
        return 'ProjectController@create — show create project form (stub)';
    }

    public function store(Request $request)
    {
        // TODO Day 5: validate inline with $request->validate([...]), then Project::create([...])
        // TODO Day 7: replace Request with StoreProjectRequest (Form Request)
        // TODO Day 8: associate with auth()->user() before creating
        return 'ProjectController@store — save new project (stub)';
    }

    public function show(Project $project)
    {
        // TODO Day 5: return view('projects.show', ['project' => $project]);
        // TODO Day 6: load relationships — $project->load('tasks.comments', 'members');
        // TODO Day 9: $this->authorize('view', $project);
        return "ProjectController@show — show project {$project->id} (stub)";
    }

    public function edit(Project $project)
    {
        // TODO Day 5: return view('projects.edit', ['project' => $project]);
        // TODO Day 9: $this->authorize('update', $project);
        return "ProjectController@edit — edit form for project {$project->id} (stub)";
    }

    public function update(Request $request, Project $project)
    {
        // TODO Day 5: $project->update([...]) then redirect
        // TODO Day 7: replace Request with UpdateProjectRequest
        // TODO Day 9: $this->authorize('update', $project);
        return "ProjectController@update — update project {$project->id} (stub)";
    }

    public function destroy(Project $project)
    {
        // TODO Day 5: $project->delete() then redirect
        // TODO Day 9: $this->authorize('delete', $project);
        return "ProjectController@destroy — delete project {$project->id} (stub)";
    }
}