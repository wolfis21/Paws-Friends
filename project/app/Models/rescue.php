<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rescue extends Model
{
    use HasFactory;

    protected $table = 'rescue'; // Establece el nombre de la tabla

    protected $fillable = [
        'users_id',
        'demands_animals_id',
        'demand_animal_has_fundation_id',
    ];

    public function User()
    {
        return $this->belongsTo(User::class, 'users_id');
    }
    public function Demands_animals()
    {
        return $this->belongsTo(Demands_animalss::class, 'demands_animals_id');
    }
    public function Demand_animal_has_fundation()
    {
        return $this->belongsTo(Demand_animal_has_fundation::class, 'demand_animal_has_fundation_id');
    }
}
