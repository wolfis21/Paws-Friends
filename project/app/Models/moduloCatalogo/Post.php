<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';

    /**
     * Indica qué campos pueden ser llenados.
     *
     * @var array
     */

    protected $fillable = [
        'title',
        'post_content',
        'img_ref'
    ];
}