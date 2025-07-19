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
        User::factory(10)->create();
        Capsule::factory(10)->create();
        CapsuleMedia::factory(10)->create();
        CapsuleLocation::factory(10)->create();
        CapsuleTage::factory(10)->create();


        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
