<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motivo extends Model
{
    use HasFactory;

    protected $table = 'motivo'; // Establece el nombre de la tabla
    //Insertar en la tabla los campos en el siguiente orden: Maltrato animal, Situación de calle, Abandono
    protected $fillable = [
        'name',
    ];
}
