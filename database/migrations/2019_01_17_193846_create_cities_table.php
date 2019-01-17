<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

final class CreateCitiesTable extends Migration
{
    public function up(): void
    {
        Schema::create('cities', static function (Blueprint $table): void {
            $table->increments('id');
            $table->string('name');
            $table->string('country');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('states');
    }
}
