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
        Schema::table('capsule_tags', function (Blueprint $table) {
            $table->index(['capsule_id', 'id'], 'index_capsule_tag_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('capsule_tags', function (Blueprint $table) {
            $table->dropIndex('index_capsule_tag_id');
        });
    }
};
