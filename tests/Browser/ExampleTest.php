<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit(
                'https://report.seorank.tn/site/2150'
            )->keys(
                'input[name=url]',
                'https://laravel.com/docs/master/dusk'
            )->click("#search-button")
                ->resize(1100, 2500)->driver->takeScreenshot("/");
        });
    }
}
