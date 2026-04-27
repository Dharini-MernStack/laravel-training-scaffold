<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProjectCrudTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function authenticated_user_can_view_their_projects()
    {
        // TODO Day 12: actingAs($user)->get('/projects') → assertOk(), assertSee($project->name)
        $this->markTestIncomplete('TODO Day 12');
    }

    /** @test */
    public function authenticated_user_can_create_a_project()
    {
        // TODO Day 12: actingAs($user)->post('/projects', [...]) → assertRedirect(), assertDatabaseHas(...)
        $this->markTestIncomplete('TODO Day 12');
    }

    /** @test */
    public function user_cannot_update_another_users_project()
    {
        // TODO Day 12: ensures Day 9 policies work — actingAs($otherUser)->put(...) → assertForbidden()
        $this->markTestIncomplete('TODO Day 12');
    }

    // TODO Day 12: add 2 more tests covering update + delete for the owner
}