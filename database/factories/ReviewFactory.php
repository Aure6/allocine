<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Work;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'rating' => rand(0, 10),
            'body' => fake()->realText(100),
            'img_path' => 'placeholder.jpg',
            'published_at' => fake()->dateTimeBetween('-2 months', '+ 1 month'),
            'user_id' => User::get()->random()->id,
            'work_id' => Work::get()->random()->id,
        ];
    }
}
