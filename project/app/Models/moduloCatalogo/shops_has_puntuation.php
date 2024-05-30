<?php

namespace App\Models\moduloCatalogo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shops_has_puntuation extends Model
{
    protected $table = 'shops_has_puntuations';

    protected $fillable = [
        'puntuations_id',
        'shops_id',
        'created_at',
        'updated_at',
    ];
    public function shops(){
        return $this->belongsTo(Shop::class, 'shops_id', 'id');
    }

    public function puntuations(){
        return $this->belongsTo(Puntuations::class, 'puntuations_id', 'id');
    }

    use HasFactory;
}
