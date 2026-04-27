<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthorizationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function guest_is_redirected_to_login_when_visiting_projects()
    {
        // TODO Day 12: $this->get('/projects')->assertRedirect('/login');
        $this->markTestIncomplete('TODO Day 12');
    }

    /** @test */
    public function admin_can_access_admin_routes()
    {
        // TODO Day 12: actingAs($admin)->get('/admin/...')->assertOk();
        $this->markTestIncomplete('TODO Day 12');
    }
}