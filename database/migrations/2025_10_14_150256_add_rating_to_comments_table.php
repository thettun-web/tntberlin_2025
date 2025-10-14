<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('comments', function (Blueprint $table) {
            // Add a column for a 1-5 star rating
            $table->unsignedTinyInteger('rating')->nullable()->after('content');
        });
    }

    public function down(): void
    {
        Schema::table('comments', function (Blueprint $table) {
            // This allows the migration to be reversed
            $table->dropColumn('rating');
        });
    }
};
