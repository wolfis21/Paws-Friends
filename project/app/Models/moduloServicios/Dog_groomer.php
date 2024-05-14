<?php

namespace App\Models\moduloServicios;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dog_groomer extends Model
{
    protected $table = 'dog_groomer';
    protected $fillable = [
        'name' ,
        'address' ,
        'phone' ,
        'link_ref' ,
        'img_ref' ,
        'puntuation'
    ];
    public function puntuaciones()
    {
        return $this->belongsToMany(Puntuations::class, 'dog_groomer_has_puntuations', 'dog_groomer_id', 'puntuations_id')
            ->withPivot('created_at', 'updated_at');
    }
    use HasFactory;
}
