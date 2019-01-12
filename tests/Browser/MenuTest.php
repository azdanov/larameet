<?php

declare(strict_types=1);

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Throwable;

final class MenuTest extends DuskTestCase
{
    /** @throws Throwable */
    public function testCanNavigateToLocations(): void
    {
        $this->browse(static function (Browser $browser): void {
            $browser->visit('/')
                ->clickLink('Locations')
                ->assertPathIs('/locations');
        });
    }

    /** @throws Throwable */
    public function testCanNavigateHomeFromLocations(): void
    {
        $this->browse(static function (Browser $browser): void {
            $browser->visit('/')
                ->clickLink('Locations')
                ->clickLink('LaraMeet')
                ->assertPathIs('/');
        });
    }

    /** @throws Throwable */
    public function testCanNavigateToEvents(): void
    {
        $this->browse(static function (Browser $browser): void {
            $browser->visit('/')
                ->clickLink('Events')
                ->assertPathIs('/events');
        });
    }

    /** @throws Throwable */
    public function testCanNavigateToMap(): void
    {
        $this->browse(static function (Browser $browser): void {
            $browser->visit('/')
                ->clickLink('Map')
                ->assertPathIs('/map');
        });
    }

    /** @throws Throwable */
    public function testCanNavigateToAbout(): void
    {
        $this->browse(static function (Browser $browser): void {
            $browser->visit('/')
                ->clickLink('About')
                ->assertPathIs('/about');
        });
    }

    /** @throws Throwable */
    public function testCanNavigateToContact(): void
    {
        $this->browse(static function (Browser $browser): void {
            $browser->visit('/')
                ->clickLink('Contact')
                ->assertPathIs('/contact');
        });
    }

    /** @throws Throwable */
    public function testCanNavigateToLogin(): void
    {
        $this->browse(static function (Browser $browser): void {
            $browser->visit('/')
                ->clickLink('Login')
                ->assertPathIs('/login');
        });
    }

    /** @throws Throwable */
    public function testCanNavigateToRegisterFromLogin(): void
    {
        $this->browse(static function (Browser $browser): void {
            $browser->visit('/')
                ->clickLink('Login')
                ->clickLink('Register?')
                ->assertPathIs('/register');
        });
    }

    /** @throws Throwable */
    public function testCanNavigateToResetPasswordFromLogin(): void
    {
        $this->browse(static function (Browser $browser): void {
            $browser->visit('/')
                ->clickLink('Login')
                ->clickLink('Reset Password')
                ->assertPathIs('/password/reset');
        });
    }
}
