<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Capsule;
use App\Models\CapsuleMedia;
use App\Models\CapsuleTag;
use App\Models\CapsuleLocation;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
{
    // Create 10 users
    User::factory(10)->create()->each(function ($user) {
        // For each user, create 10 capsules
        Capsule::factory(10)->create(['user_id' => $user->id])->each(function ($capsule) {
            // For each capsule, create 1 media, 1 location, and 1 tag
            CapsuleMedia::factory()->create([
                'capsule_id' => $capsule->id,
            ]);

            CapsuleLocation::factory()->create([
                'capsule_id' => $capsule->id,
            ]);

            CapsuleTag::factory()->create([
                'capsule_id' => $capsule->id,
            ]);
        });
    });


    }
}
}