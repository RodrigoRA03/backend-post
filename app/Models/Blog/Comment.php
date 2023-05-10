<?php

namespace App\Models\Blog;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory, SoftDeletes;
    use HasFactory;

    protected $table = 'comments';
    protected $primaryKey = 'id';


    protected $fillable = [
        'post_id',
        'autor',
        'contenido',
    ];

    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }
}
