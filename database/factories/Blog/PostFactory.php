<?php

namespace Database\Factories\Blog;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'titulo' => $this->faker->name(),
            'autor' => $this->faker->name(),
            'contenido' => $this->faker->text(),
            'fecha_publicacion' => now(),
            'created_at' => now()
        ];
    }
}
