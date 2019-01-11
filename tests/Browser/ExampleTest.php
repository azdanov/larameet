<?php

declare(strict_types=1);

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Throwable;

final class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @throws Throwable
     */
    public function testBasicExample(): void
    {
        $this->browse(static function (Browser $browser): void {
            $browser->visit('/')
                ->assertSee('LaraMeet');
        });
    }
}
