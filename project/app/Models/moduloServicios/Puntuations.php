<?php

namespace App\Models\moduloServicios;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Puntuations extends Model
{
    protected $fillable = [
        'puntuation',
        'users_id'
    ];

    public function veterinarios()
    {
        return $this->belongsToMany(Veterinarian::class, 'veterinarians_has_puntuations', 'puntuations_id', 'veterinarians_id')
            ->withPivot('created_at', 'updated_at');
    }
    use HasFactory;
}
