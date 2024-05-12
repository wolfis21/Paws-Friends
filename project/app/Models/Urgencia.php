<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Urgencia extends Model
{
    use HasFactory;

    protected $table = 'urgencia'; // Establece el nombre de la tabla

    protected $fillable = [
        'name',
    ];
}
