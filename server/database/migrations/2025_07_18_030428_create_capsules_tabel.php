<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('capsules', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained()->onDelete('cascade');
            $table->date('reveal_at');
            $table->boolean('is_revealed')->default(false);
            $table->timestamps();
        });

        Schema::create('capsules_media', function (Blueprint $table){
            $table->id();
            $table->foreignIdFor(Capsule::class)->constrained()->onDelete('cascade');
            $table->string('media_type');
            $table->text('file_path');
            $table->string('file_name');
            $table->string('mood');
            $table->timestamps();
        });

        Schema::create('capsules_tags', function (Blueprint $table){
            $table->id();
            $table->foreignIdFor(Capsule::class)->constrained()->onDelete('cascade');
            $table->boolean('private_mode')->default(false);
            $table->boolean('surprize_mode')->default(false);
            $table->boolean('location_mode')->default(false);
            $table->timestamps();
        });

        Schema::create('capsule_locations', function (Blueprint $table){
            $table->id();
            $table->foreignIdFor(Capsule::class)->constrained()->onDelete('cascade');
            $table->string('ip_address')->nullable();
            $table->decimal('latitude', 10, 7)->nullable(); #10, 7 means 10 decimals with 7 after the point
            $table->decimal('longitude', 10, 7)->nullable();
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('capsules_tabel');
    }
};
