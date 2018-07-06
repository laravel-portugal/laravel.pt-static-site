<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class CommunityLinksTest extends DuskTestCase
{
    public function setUp()
    {
        parent::setUp();

        //TODO figure out why not desabling debugbar, so resize doesn't have to happen
        \Debugbar::disable();
    }
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
                ->assertVue('jsvars.loaded', true,'@app')
                ->resize(1920, 1080)
                ->click('.community-links-button')
                ->assertUrlIs('*/community-links');
        });
    }
}
