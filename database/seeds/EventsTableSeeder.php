<?php

declare(strict_types=1);

use App\Event;
use Faker\Factory;
use Illuminate\Database\Seeder;

final class EventsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('events')->truncate();

        $faker = Factory::create();

        for ($i = 0; $i < 50; ++$i) {
            Event::create([
                'name' => $faker->catchPhrase,
                'venue' => $faker->company,
                'city' => $faker->city,
                'max_attendees' => $faker->numberBetween(2, 10),
                'description' => $faker->paragraphs(1, true),
                'published' => $faker->boolean,
                'start_at' => $faker->dateTimeBetween('+0 days', '+1 years'),
            ]);
        }
    }
}
