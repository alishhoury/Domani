<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Capsule;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CapsuleLocation>
 */
class CapsuleLocationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ip_address' =>$this->faker->numerify('##.##.###.###'),
            'latitude' => $this->faker->latitude(),
            'longitude' => $this->faker->longitude(),        
        ];
    }
}
