<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class addProductTest extends DuskTestCase
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
            ->type('productName', 'new Prodouct')
            ->type('productDescription', 'new Description')
            ->type('productImage', 'new Image')
            ->type('productPrice', '50')
            ->select('productStatus')
            ->select('productCategory')
            ->press('Submit')
            ->waitForTextIn('#status', 'new Prodouct Added!', 10);
            ;
        });
    }
}
