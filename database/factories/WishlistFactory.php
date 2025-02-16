<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class WishlistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $releaseDate = fake()->date();

        return [
            "api_id" => uniqid(),
            "name" => fake()->name(),
            "code" => fake()->unique()->sentence(),
            "release_date" => $releaseDate,
        ];
    }
}
