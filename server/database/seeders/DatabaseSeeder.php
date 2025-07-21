<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Capsule;
use App\Models\CapsuleLocation;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void{

        User::factory(10)->create()->each(function ($user) {
            Capsule::factory(10)->create([
                'user_id' => $user->id,
            ]);
        });
    }
}
    


