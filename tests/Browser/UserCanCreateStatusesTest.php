<?php

namespace Tests\Browser;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class UserCanCreateStatusesTest extends DuskTestCase
{
    use DatabaseMigrations;

    /**
     * A Dusk test example.
     * @test
     * @return void
     */
    public function user_can_create_status()
    {
        $user = User::factory()->create();


        $this->browse(function (Browser $browser) use ($user) {
            $browser->loginAs($user)
                    ->visit('/')
                    ->type('body', 'My First Status')
                    ->screenshot('test')
                    ->press('#create-status')
                    ->assertSee('My First Status')
                    ;
        });
    }
}
