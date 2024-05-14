<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Types_status extends Model
{
    use HasFactory;

    protected $table = 'types_status'; // Establece el nombre de la tabla
       //Insertar en la tabla los campos en el siguiente orden: En espera, Aceptada, Rechazada
    protected $fillable = [
        'name',
    ];
   
}
