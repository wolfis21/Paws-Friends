<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rescue extends Model
{
    use HasFactory;

    protected $table = 'rescue'; // Establece el nombre de la tabla

    protected $fillable = [
        'date',
        'fundation_id',
    ];

    public function Fundation()
    {
        return $this->belongsTo(fundation::class, 'fundation_id');
    }
}
