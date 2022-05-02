<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class addCategoryTest extends DuskTestCase
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
            ->click('#categories')
            ->assertPathIs('/add/category')
            ->type('categoryName', 'new Category')
            ->type('categoryDescription', 'new Description')
            ->type('categoryImage', 'new Image')
            ->press('Submit')
            ->waitForTextIn('#status', 'new Category Added!', 10);
            ;
        });
    }
}
