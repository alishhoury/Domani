<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CapsuleMedia>
 */
class CapsuleMediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'media_type' =>$this->faker->randomElement(['message', 'image', 'video']),
            'file_path' =>$this->faker->filePath(),
            'file_name' =>$this->faker->word(),
            'mood' =>$this->faker->randomElement(['happy', 'sad', 'excited', 'nervous']),
        ];
    }
}
