<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('gallery_categories', function (Blueprint $table) {
            $table->foreignId('icon_id')->nullable()->after('name')->constrained('icons')->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('gallery_categories', function (Blueprint $table) {
            $table->dropConstrainedForeignId('icon_id');
        });
    }
};
