<?php

namespace App\Policies;

use App\Models\Project;
use App\Models\User;

class ProjectPolicy
{
    public function viewAny(User $user): bool
    {
        // TODO Day 9: any logged-in user can view their own project list
        return false;
    }

    public function view(User $user, Project $project): bool
    {
        // TODO Day 9: only the owner OR a team member can view
        return false;
    }

    public function create(User $user): bool
    {
        // TODO Day 9: any logged-in user can create projects
        return false;
    }

    public function update(User $user, Project $project): bool
    {
        // TODO Day 9: only the owner can update
        return false;
    }

    public function delete(User $user, Project $project): bool
    {
        // TODO Day 9: only the owner can delete
        return false;
    }
}