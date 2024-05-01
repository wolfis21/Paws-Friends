<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fundation extends Model
{
    use HasFactory;

    protected $table = 'fundation'; // Establece el nombre de la tabla

    protected $fillable = [
        'name',
        'phone',
        'email',
        'description',
    ];
}
