<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

final class AddCityIdToEventsTable extends Migration
{
    public function up(): void
    {
        Schema::table('events', static function (Blueprint $table): void {
            $table->integer('city_id')->unsigned()->nullable();
            $table->foreign('city_id')->references('id')->on('cities');
        });
    }

    public function down(): void
    {
        Schema::table('events', static function (Blueprint $table): void {
            $table->dropForeign('events_city_id_foreign');
            $table->dropColumn('city_id');
        });
    }
}
