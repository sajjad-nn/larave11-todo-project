<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
         
            'title'=>fake()->title(),
            'slug'=>fake()->slug(),
            'number'=>fake()->numerify(),
            'email'=>fake()->email(),
            // 'img'=>fake()->imageUrl('1200x480'),
           

        ];
    }
}
