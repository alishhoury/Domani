<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Capsule;


return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('capsule_locations', function (Blueprint $table){
            $table->id();
            $table->foreignIdFor(Capsule::class)->constrained()->onDelete('cascade');
            $table->string('ip_address')->nullable();
            $table->decimal('latitude', 10, 7)->nullable(); #10, 7 means 10 decimals with 7 after the point
            $table->decimal('longitude', 10, 7)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('capsule_locations');
    }
};
