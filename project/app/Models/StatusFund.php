<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusFund extends Model
{
    use HasFactory;
    protected $table = 'StatusFund'; // Establece el nombre de la tabla

    protected $fillable = [
        'name',
    ];
}
