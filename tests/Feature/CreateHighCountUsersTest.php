<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateHighCountUsersTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_create_large_count_users(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
