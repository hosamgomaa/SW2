<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class navigationButtonsTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->click('#products')
            ->assertPathIs('/add/product')
            ->click('#main')
            ->assertPathIs('/')
            ->click('#categories')
            ->assertPathIs('/add/category')
            ->click('#main')
            ->assertPathIs('/');


        });
    }
}
