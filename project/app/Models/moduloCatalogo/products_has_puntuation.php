<?php

namespace App\Models\moduloCatalogo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products_has_puntuation extends Model
{
    protected $table = 'products_has_puntuations';

    protected $fillable = [
        'puntuations_id',
        'products_id',
        'created_at',
        'updated_at',
    ];
    public function products(){
        return $this->belongsTo(Product::class, 'products_id', 'id');
    }

    public function puntuations(){
        return $this->belongsTo(Puntuations::class, 'puntuations_id', 'id');
    }

    use HasFactory;
}
