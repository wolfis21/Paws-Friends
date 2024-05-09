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
    use HasFactory;
}
