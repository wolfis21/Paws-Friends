<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motivo extends Model
{
    use HasFactory;

    protected $table = 'motivo'; // Establece el nombre de la tabla
  
    protected $fillable = [
        'name',
    ];
}
