<?php

namespace Database\Factories\Blog;

use App\Models\Blog\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'autor' => $this->faker->name(),
            'contenido' => $this->faker->text(),
            'post_id' => Post::query()->inRandomOrder()->first()->id,
            'created_at' => now()
        ];
    }
}
