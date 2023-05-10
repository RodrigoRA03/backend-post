<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'posts';
    protected $primaryKey = 'id';

    protected $fillable = [
        'titulo',
        'autor',
        'contenido',
        'fecha_publicacion',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
