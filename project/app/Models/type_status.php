<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type_status extends Model
{
    use HasFactory;

    protected $table = 'type_status'; // Establece el nombre de la tabla

    protected $fillable = [
        'name',
    ];
   
}
