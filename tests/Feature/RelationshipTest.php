<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RelationshipTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function project_has_many_tasks()
    {
        // TODO Day 12: create project, attach tasks, assert $project->tasks->count() === N
        $this->markTestIncomplete('TODO Day 12');
    }

    /** @test */
    public function user_belongs_to_many_projects()
    {
        // TODO Day 12: assert $user->projects relationship works (pivot table)
        $this->markTestIncomplete('TODO Day 12');
    }
}