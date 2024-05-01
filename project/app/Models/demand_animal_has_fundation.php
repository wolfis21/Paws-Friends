<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class demand_animal_has_fundation extends Model
{
    use HasFactory;

    protected $table = 'demand_animal_has_fundation'; // Establece el nombre de la tabla

    protected $fillable = [
        'demands_animals_id',
        'fundation_id',
        'date',
        'status_process',
    ];

    public function Demands_animals()
    {
        return $this->belongsTo(demands_animals::class, 'demands_animals_id');
    }

    public function Fundation()
    {
        return $this->belongsTo(fundation::class, 'fundation_id');
    }
}
