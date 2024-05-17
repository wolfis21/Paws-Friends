<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusFund extends Model
{
    use HasFactory;
    protected $table = 'Statusfund'; // Establece el nombre de la tabla
    //Insertar en la tabla los campos en el siguiente orden: Asignada, No asignada, Completada
    protected $fillable = [
        'name',
    ];
}
