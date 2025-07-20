<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Capsule;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CapsuleTag>
 */
class CapsuleTagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'private_mode' =>$this->faker->boolean(),
            'surprize_mode' =>$this->faker->boolean(),
            'location_mode' => 1,
        ];
    }
}
