<?php

namespace App\Models\moduloServicios;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Housings_has_puntuation extends Model
{
        protected $table = 'housings_has_puntuations';
    
        protected $fillable = [
            'puntuations_id',
            'housings_id',
            'created_at',
            'updated_at',
        ];
        public function housing(){
            return $this->belongsTo(housing::class, 'housing_id', 'id');
        }
    
        public function puntuations(){
            return $this->belongsTo(Puntuations::class, 'puntuations_id', 'id');
        }
    use HasFactory;
}
