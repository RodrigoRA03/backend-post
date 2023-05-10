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
        $comment = Comment::query()->create([
            'titulo' => $args['titulo'],
            'cuerpo' => $args['cuerpo'],
            'fecha_publicacion' => $args['fecha_publicacion']
        ]);

        return $comment;
    }
}
