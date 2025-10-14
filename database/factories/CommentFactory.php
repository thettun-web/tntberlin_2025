<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Article;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'article_id' => Article::inRandomOrder()->first()->id,
            'author_id' => User::inRandomOrder()->first()->id,
            'content' => fake()->paragraph(),
//            'rating' => fake()->boolean(75),
        ];
    }
}
