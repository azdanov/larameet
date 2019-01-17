<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

final class AddCommentToEventUserTable extends Migration
{
    public function up(): void
    {
        Schema::table('event_user', static function (Blueprint $table): void {
            $table->string('comment');
        });
    }

    public function down(): void
    {
        Schema::table('event_user', static function (Blueprint $table): void {
            $table->dropColumn('comment');
        });
    }
}
