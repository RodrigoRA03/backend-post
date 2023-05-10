<?php

declare(strict_types=1);

namespace App\Services;

use App\Domain\Post\PostRequest;
use App\Models\Blog\Post;
use Illuminate\Pagination\LengthAwarePaginator;

class PostService
{

    public function getAllPost(): LengthAwarePaginator
    {
        $post = Post::query()->with('comments')->paginate(10);
        return $post;
    }

    public function storePost(array $args)
    {
        $user = auth()->user(); // obtiene el objeto del usuario autenticado
        $nombre = $user->name;
        $post = Post::query()->create(array_merge($args, ['autor' => $nombre]));
        return $post;
    }

    public function showPost($id)
    {
        $post = Post::query()->with('comments')->get()->find($id);
        return $post;
    }
}
