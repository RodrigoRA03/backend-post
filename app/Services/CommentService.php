<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\Blog\Comment;
use Illuminate\Pagination\LengthAwarePaginator;

class CommentService
{

    public function getAllCommets(): LengthAwarePaginator
    {
        $comment = Comment::query()->paginate(10);
        return $comment;
    }

    public function storeComment(array $args)
    {
        $user = auth()->user(); // obtiene el objeto del usuario autenticado
        $nombre = $user->name;
        $comment = Comment::query()->create([
            'contenido' => $args['contenido'],
            'post_id' => $args['post_id'],
            'autor' => $nombre,
        ]);


        return $comment;
    }
}
