<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class UserCanCreateStatusesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @test
     * @return void
     */
    public function user_can_create_status()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                	->screenshot('home')
                    ->type('body', 'My First Status')
                    ->press('#create-status')
                    ->assertSee('My First Status')
                    ;
        });
    }
}
