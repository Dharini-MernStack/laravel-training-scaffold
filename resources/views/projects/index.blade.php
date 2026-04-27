@extends('layouts.app')

@section('content')
    {{-- TODO Day 3: build the projects list page --}}
    {{-- Should display all projects in a Tailwind grid; each card links to the show page --}}
    {{-- TODO Day 5: replace hardcoded data with real DB data passed from the controller --}}
    {{-- TODO Day 9: use @can('update', $project) to conditionally show edit/delete buttons --}}

    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold">Projects</h1>
        <p class="text-gray-500 mt-4">TODO Day 3 — projects index goes here</p>
    </div>
@endsection