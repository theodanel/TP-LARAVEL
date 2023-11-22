<?php

namespace Database\Factories;

use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => fake()->name(),
            'price' => fake()->numberBetween(10,150),
            'image' => fake()->imageUrl(),
            'outofstock' => fake()->boolean(),
            'slug' => fake()->slug(),
            'synopsis' => fake()->text(),
            'tag_id' => Tag::factory(),

        ];
    }
}


 