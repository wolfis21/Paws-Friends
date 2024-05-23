<?php

namespace App\Models\moduloCatalogo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    protected $table = 'shops';
    /**
     * Indica qué campos pueden ser llenados.
     *
     * @var array
     */


    protected $fillable = [
        'name', 
        'address', 
        'phone', 
        'link_ref',
        'img_ref',
        'puntuation'
    ];

    public function puntuaciones()
    {
        return $this->belongsToMany(Puntuations::class, 'shops_has_puntuations', 'shops_id', 'puntuations_id')
            ->withPivot('created_at', 'updated_at');
    }
   
    public function products(){
        return $this->hasMany(Product::class,'shop_id','id');
    }
}

