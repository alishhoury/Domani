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
        Schema::create('capsule_media', function (Blueprint $table){
            $table->id();
            $table->foreignIdFor(Capsule::class)->constrained()->onDelete('cascade');
            $table->string('media_type');
            $table->text('file_path');
            $table->string('file_name');
            $table->string('mood');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('capsule_media');
    }
};
