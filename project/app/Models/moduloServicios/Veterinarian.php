<?php

namespace App\Models\moduloServicios;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Veterinarian extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'link_ref',
        'img_ref',
        'specialist_animals',
        'puntuation'
    ];
    public function puntuaciones()
    {
        return $this->belongsToMany(Puntuations::class, 'veterinarians_has_puntuations', 'veterinarians_id', 'puntuations_id')
            ->withPivot('created_at', 'updated_at');
    }
};
