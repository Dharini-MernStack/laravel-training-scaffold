<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ApiAuthTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function user_can_login_and_receive_a_token()
    {
        // TODO Day 12: POST /api/login with credentials → assertJsonStructure(['token'])
        $this->markTestIncomplete('TODO Day 12');
    }

    /** @test */
    public function authenticated_request_returns_user_projects()
    {
        // TODO Day 12: GET /api/projects with bearer token → assertOk(), assertJsonCount(...)
        $this->markTestIncomplete('TODO Day 12');
    }
}