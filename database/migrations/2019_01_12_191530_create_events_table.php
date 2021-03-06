<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

final class CreateEventsTable extends Migration
{
    public function up(): void
    {
        Schema::create('events', static function (Blueprint $table): void {
            $table->increments('id');
            $table->string('name');
            $table->string('slug');
            $table->string('venue');
            $table->string('city');
            $table->unsignedTinyInteger('max_attendees');
            $table->text('description')->nullable();
            $table->boolean('published')->default(false);
            $table->timestamp('start_at');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('events');
    }
}
