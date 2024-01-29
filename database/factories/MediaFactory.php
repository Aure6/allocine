<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Media>
 */
class MediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->catchPhrase(),
            'description' => fake()->realText(100),
            'img_path' => 'placeholder.jpg',
            'published_at' => fake()->dateTimeBetween('-2 months', '+ 1 month'),
            'category_id' => Category::get()->random()->id,
        ];
    }
}
