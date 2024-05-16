<?php

namespace App\Models\moduloCatalogo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * Indica qué campos pueden ser llenados.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'category_id', 'img_ref', 'description', 'quantity', // Se agregó 'quantity'
    ];

    /**
     * Obtiene la categoría a la que pertenece el producto.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Obtiene el usuario que creó el producto.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

