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
        Schema::table('capsules', function (Blueprint $table) {
            
            $table->index(['is_revealed', 'reveal_at'], 'index_is_revealed_reveal_at');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('capsules', function (Blueprint $table) {
            $table->dropIndex('index_is_revealed_reveal_at');
        });
    }
};
