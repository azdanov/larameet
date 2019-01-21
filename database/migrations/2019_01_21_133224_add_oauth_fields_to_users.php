<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

final class AddOauthFieldsToUsers extends Migration
{
    public function up(): void
    {
        Schema::table('users', static function (Blueprint $table): void {
            $table->string('provider')->nullable();
            $table->integer('provider_id')->unsigned()->nullable();
            $table->string('handle_github')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('users', static function (Blueprint $table): void {
            $table->dropColumn('provider_id');
            $table->dropColumn('handle_github');
        });
    }
}
