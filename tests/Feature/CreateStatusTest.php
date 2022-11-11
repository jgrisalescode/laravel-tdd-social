<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CreateStatusTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function an_authenticated_user_can_create_statuses()
    {
        $this->withoutExceptionHandling();

        // 1. Given | An authenticated user
        $user = User::factory()->create();
        $this->actingAs($user);

        // 2. When | Makes a post request to status
        $response = $this->post(route('statuses.store'), [
            "body" => "My first Status"
        ]);

        // 2.1 Chek the response, we need a Json because we are goint o use Vue
        $response->assertJson([
            "body" => "My first Status"
        ]);

        // 3. Then | This status is in the DB
        $this->assertDatabaseHas("statuses", [
            "user_id" => $user->id,
            "body" => "My first Status"
        ]);
    }

    /** @test */
    public function guests_can_not_create_statuses()
    {
        // $this->withoutExceptionHandling();

        $response = $this->post(route('statuses.store'), [
            "body" => "My first Status"
        ]);

        $response->assertRedirect(route("login"));
    }
}
