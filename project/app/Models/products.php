<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;

    /**
     * Indica que campos pueden ser llenados.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'category_id', 'img_ref', 'description',
    ];

    /**
     * Obtiene la categoría a la que pertenece el producto.
     */
    public function categories()
    {
        return $this->belongsTo(categories::class);
    }

    /**
     * Obtiene el usuario que creó el producto.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
