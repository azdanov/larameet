<?php

declare(strict_types=1);

use Illuminate\Foundation\Inspiring;

Artisan::command('inspire', function (): void {
    $this->comment(Inspiring::quote());
})->describe('Display an inspiring quote');
