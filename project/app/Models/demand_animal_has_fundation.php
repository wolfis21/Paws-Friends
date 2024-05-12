<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class Demand_animal_has_fundation extends Model
{
    use HasFactory;

    protected $table = 'demand_animal_has_fundation'; // Establece el nombre de la tabla

    protected $fillable = ['demands_animals_id','fundation_id','description', 'types_status_id'];

    public function Demands_animalss()
    {
        return $this->belongsTo(Demands_animalss::class, 'demands_animals_id');
    }

    public function Fundation()
    {
        return $this->belongsTo(Fundation::class, 'fundation_id');
    }

    public function types_status()
    {
        return $this->belongsTo(types_status::class, 'types_status_id');
    }
}
