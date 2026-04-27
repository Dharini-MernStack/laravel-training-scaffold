@extends('layouts.app')

@section('content')
    {{-- TODO Day 3: build the tasks list page --}}
    {{-- Should display all tasks for the current project, grouped or filtered by status --}}
    {{-- TODO Day 5: replace hardcoded data with real DB data passed from the controller --}}
    {{-- TODO Day 9: use @can('update', $task) to conditionally show edit/delete buttons --}}

    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold">Tasks</h1>
        <p class="text-gray-500 mt-4">TODO Day 3 — tasks index goes here</p>
    </div>
@endsection