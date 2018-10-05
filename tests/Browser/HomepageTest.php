<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class HomepageTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     * @throws \Throwable
     */
    public function testHomepage():void
    {
        $this->browse(function (Browser $browser) {

            $browser
                ->visit('/')
                ->assertSee('Laravel.pt')
                ->assertVue('jsvars.loaded', true,'@app');
        });
    }
}