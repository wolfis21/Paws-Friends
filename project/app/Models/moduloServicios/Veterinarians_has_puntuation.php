<?php

namespace App\Models\moduloServicios;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veterinarians_has_puntuation extends Model
{
    protected $table = 'veterinarians_has_puntuations';

    protected $fillable = [
        'puntuations_id',
        'veterinarians_id'
    ];

    public function veterinarians(){
        return $this->belongsTo(Veterinarian::class,'veterinarians_id','id');
    }

    public function puntuations(){
        return $this->belongsTo(Puntuations::class, 'puntuations_id', 'id');
    }
    // public function puntuations()
    // {
    //     return $this->belongsToMany(User::class, 'veterinarians_has_puntuations', 'veterinarians_id', 'users_id')
    //                 ->withPivot('puntuations');
    // }
    use HasFactory;
}
