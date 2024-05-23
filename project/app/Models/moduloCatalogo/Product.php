<?php

namespace App\Models\moduloCatalogo;

use App\Models\CategoryAnimal;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    /**
     * Indica qué campos pueden ser llenados.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description', 
        'img_ref',
        'price',
        'puntuation', 
        'product_category_animals_id',
        'shop_id'
    ];

    public function category_animal(){
        return $this->belongsTo(categoryProductsAnimals::class, 'product_category_animals_id','id');
    }

    public function puntuaciones()
    {
        return $this->belongsToMany(Puntuations::class, 'product_has_puntuations', 'products_id', 'puntuations_id')
            ->withPivot('created_at', 'updated_at');
    }

    public function shop(){
        return $this->belongsTo(shop::class,'shop_id','id');
    }
}


