<?php

declare(strict_types=1);

use Illuminate\Database\Seeder;

final class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(EventsTableSeeder::class);
    }
}
