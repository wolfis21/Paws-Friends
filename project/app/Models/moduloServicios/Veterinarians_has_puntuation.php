<?php

namespace App\Models\moduloServicios;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veterinarians_has_puntuation extends Model
{
    protected $table = 'veterinarians_has_puntuations';

    public function veterinarians(){
        return $this->belongsTo(Veterinarian::class,'veterinarians_id','id');
    }

    public function puntuations(){
        return $this->belongsTo(Puntuations::class, 'puntuations_id', 'id');
    }
    use HasFactory;
}
