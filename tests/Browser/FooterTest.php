<?php

declare(strict_types=1);

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Throwable;

final class FooterTest extends DuskTestCase
{
    /** @throws Throwable */
    public function testCanNavigateSeeColumnHeadings(): void
    {
        $this->browse(static function (Browser $browser): void {
            $browser->visit('/')
                ->with('footer', static function (Browser $footer): void {
                    $footer->assertSee('Get Started')
                        ->assertSee('About Us')
                        ->assertSee('Support')
                        ->assertSee('Legal');
                });
        });
    }

    /** @throws Throwable */
    public function testCanNavigateToLogin(): void
    {
        $this->browse(static function (Browser $browser): void {
            $browser->visit('/')
                ->with('footer', static function (Browser $footer): void {
                    $footer->clickLink('Login')
                        ->assertPathIs('/login');
                });
        });
    }

    /** @throws Throwable */
    public function testCanNavigateToRegister(): void
    {
        $this->browse(static function (Browser $browser): void {
            $browser->visit('/')
                ->with('footer', static function (Browser $footer): void {
                    $footer->clickLink('Register')
                        ->assertPathIs('/register');
                });
        });
    }

    /** @throws Throwable */
    public function testCanNavigateToAboutLaraMeet(): void
    {
        $this->browse(static function (Browser $browser): void {
            $browser->visit('/')
                ->with('footer', static function (Browser $footer): void {
                    $footer->clickLink('About LaraMeet')
                        ->assertPathIs('/about');
                });
        });
    }

    /** @throws Throwable */
    public function testCanNavigateToContactUs(): void
    {
        $this->browse(static function (Browser $browser): void {
            $browser->visit('/')
                ->with('footer', static function (Browser $footer): void {
                    $footer->clickLink('Contact Us')
                        ->assertPathIs('/contact');
                });
        });
    }

    /** @throws Throwable */
    public function testCanNavigateToFAQ(): void
    {
        $this->browse(static function (Browser $browser): void {
            $browser->visit('/')
                ->with('footer', static function (Browser $footer): void {
                    $footer->clickLink('F.A.Q.')
                        ->assertPathIs('/about/faq');
                });
        });
    }

    /** @throws Throwable */
    public function testCanNavigateToContactSupport(): void
    {
        $this->browse(static function (Browser $browser): void {
            $browser->visit('/')
                ->with('footer', static function (Browser $footer): void {
                    $footer->clickLink('Support')
                        ->assertPathIs('/contact');
                });
        });
    }

    /** @throws Throwable */
    public function testCanNavigateToTermsOfService(): void
    {
        $this->browse(static function (Browser $browser): void {
            $browser->visit('/')
                ->with('footer', static function (Browser $footer): void {
                    $footer->clickLink('Service')
                        ->assertPathIs('/about/tos');
                });
        });
    }

    /** @throws Throwable */
    public function testCanNavigateToPrivacyPolicy(): void
    {
        $this->browse(static function (Browser $browser): void {
            $browser->visit('/')
                ->with('footer', static function (Browser $footer): void {
                    $footer->clickLink('Privacy')
                        ->assertPathIs('/about/privacy');
                });
        });
    }
}
