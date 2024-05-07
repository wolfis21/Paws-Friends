<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /**
     * Indica los campos que pueden ser llenados.
     *
     * @var array
     */
    protected $fillable = ['title', 'content', 'img_ref', 'user_id'];

    /**
     * Obtiene el usuario que creó el post.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
