<?php

namespace App\Models\moduloServicios;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dog_groomers_has_puntuation extends Model
{
    protected $table = 'dog_groomer_has_puntuations';

    protected $fillable = [
        'puntuations_id',
        'dog_groomer_id',
        'created_at',
        'updated_at',
    ];
    public function dog_groomer(){
        return $this->belongsTo(Dog_groomer::class, 'dog_groomer_id', 'id');
    }

    public function puntuations(){
        return $this->belongsTo(Puntuations::class, 'puntuations_id', 'id');
    }

    use HasFactory;
}
