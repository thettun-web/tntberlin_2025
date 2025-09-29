<?php

namespace Database\Factories;

use App\Models\User;
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

            'title' => fake()->sentence(),
            //'author' => fake()->name(),
            'author_id' => User::inRandomOrder()->first()->id,
            'content' => fake()->text(500),
             // table->foreignId(column: 'author_id'),
            //
        ];
    }
}
