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
        Schema::create('capsule_tags', function (Blueprint $table){
            $table->id();
            $table->foreignIdFor(Capsule::class)->constrained()->onDelete('cascade');
            $table->boolean('private_mode')->default(false);
            $table->boolean('surprize_mode')->default(false);
            $table->boolean('location_mode')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('capsule_tags');
    }
};
