<?php

namespace App\Models\moduloServicios;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Housing extends Model
{
    protected $table = 'housings';

    protected $fillable = [
        'name',
        'address' ,
        'phone' ,
        'description_location' ,
        'type_animals' ,
        'food_offer' ,
        'img_ref',
        'puntuation'
    ];

    public function puntuaciones()
    {
        return $this->belongsToMany(Puntuations::class, 'housings_has_puntuations', 'housings_id', 'puntuations_id')
            ->withPivot('created_at', 'updated_at');
    }
    use HasFactory;
}
