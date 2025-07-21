<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\User;
use App\Models\Capsule;

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
            //tags
            $table->boolean('private_mode')->default(false);
            $table->boolean('surprize_mode')->default(false);
            $table->boolean('location_mode')->default(false);
            //media
            $table->enum('mood', ['happy', 'sad', 'nervous', 'excited']);
            $table->text('message');
            $table->enum('media_type', ['image','video', 'audio'])->nullable;
            $table->string('media_path')->nullable;
            //reveal
            $table->date('reveal_at');
            $table->boolean('is_revealed')->default(false);

            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    Schema::dropIfExists('capsules');
    }
};
