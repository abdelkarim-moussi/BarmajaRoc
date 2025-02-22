<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\comment>
 */
class commentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
        {
            return [
                'user_id' => fake()->randomNumber(), // Generates a random number for user ID
                'article_id' => fake()->randomNumber(), // Generates a random number for user ID
                'content' => fake()->text()          // Generates random text for content
            ];
        }
}
