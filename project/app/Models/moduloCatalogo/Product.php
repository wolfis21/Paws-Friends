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
        'product_category_animals_id', 
    ];


    public function category_animal(){
        return $this->belongsTo(categoryProductsAnimals::class, 'product_category_animals_id','id');
    }
}


