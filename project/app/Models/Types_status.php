<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Types_status extends Model
{
    use HasFactory;

    protected $table = 'types_status'; // Establece el nombre de la tabla

    protected $fillable = [
        'name',
    ];
   
}
