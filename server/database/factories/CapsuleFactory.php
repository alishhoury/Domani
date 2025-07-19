<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'reveal_at' =>$this->faker->date(),
            'is_revealed' => 0,
            'media_type' =>$this->faker->randomElement(['message', 'image', 'video']),
            'file_path' =>$this->faker->filePath(),
            'file_name' =>$this->faker->word(),
            'mood' =>$this->faker-randomElement(['happy', 'sad', 'excited', 'nervous']),
            'private_mode' =>$this->faker->boolean(),
            'surprize_mode' =>$this->faker->boolean(),
            'location_mode' => 1,
            'ip_address' =>$this->faker->numerify('##.##.###.###'),
            'latitude' => $this->faker->latitude(),
            'longitude' => $this->faker->longitude(),


        ];
    }
}
