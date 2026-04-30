<?php

namespace App\Policies;

use App\Models\Task;
use App\Models\User;

class TaskPolicy
{
    public function viewAny(User $user): bool
    {
        // TODO Day 9: any logged-in user can view their own task list
        return false;
    }

    public function view(User $user, Task $task): bool
    {
        // TODO Day 9: only the task's project owner OR a project member can view
        return false;
    }

    public function create(User $user): bool
    {
        // TODO Day 9: any logged-in user can create tasks (for their own projects)
        return false;
    }}