<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes — Laravel Training Scaffold
|--------------------------------------------------------------------------
| This file is intentionally minimal. You'll add routes day by day.
| Search the codebase for "TODO Day X" to find your daily tasks.
*/

Route::get('/', function () {
    return view('home');
});

// Day 2: Resource routes for projects and nested tasks
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;

Route::resource('projects', ProjectController::class);
Route::resource('projects.tasks', TaskController::class)->shallow();

// TODO Day 8: wrap both resources in auth middleware:
// Route::middleware('auth')->group(function () {
//     Route::resource('projects', ProjectController::class);
//     Route::resource('projects.tasks', TaskController::class)->shallow();
// });

// TODO Day 8: install Breeze, then Breeze will add its own auth routes here
// Run: composer require laravel/breeze --dev
//      php artisan breeze:install blade
//      npm install && npm run dev
//      php artisan migrate

// TODO Day 9: protect admin-only routes with the CheckRole middleware
// Example: Route::middleware(['auth', 'role:admin'])->group(function () { ... });