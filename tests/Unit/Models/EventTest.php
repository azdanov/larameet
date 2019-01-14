<?php

declare(strict_types=1);

namespace Tests\Unit\Models;

use App\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Carbon;
use Tests\TestCase;
use function factory;
use function is_a;

final class EventTest extends TestCase
{
    use RefreshDatabase;

    public function testEventDateTimeFieldIsACarbonObject(): void
    {
        $event = factory(Event::class)->make();

        static::assertTrue(is_a($event->start_at, Carbon::class));
    }

    public function testEventNameCapitalizationIsCorrect(): void
    {
        $event = factory(Event::class)->states('incorrect_capitalization')->make();

        static::assertEquals($event->name, 'Hacking at Iot with Raspberry Pi');
    }
}
