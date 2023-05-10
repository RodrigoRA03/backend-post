<?php

namespace Database\Seeders;

use App\Models\Blog\Comment;
use App\Models\Blog\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        Post::factory()->count(30)->create();
        Comment::factory()->count(30)->create();
    }
}
