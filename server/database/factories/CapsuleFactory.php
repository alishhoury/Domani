<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Capsule>
 */
class CapsuleFactory extends Factory
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
            'ip_address' =>$this->faker->numerify('##.##.###.###'),
            'countryName' => $this->faker->country(),
            'mood' => fake()->randomElement(['happy', 'sad', 'nervous', 'excited']),
            'message' => fake()->paragraph(),
            'media_type' => fake()->randomElement(['image', 'video', 'audio']),
            'media_path' => fake()->url(),
            'reveal_at' =>$this->faker->dateTimeBetween($startDate = '-2 year', $endDate = '+1 year'),
            'is_revealed' => 0,
        ];
    }
}
