<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;

class Demand_animal_has_fundation extends Model
{
    use HasFactory;

    protected $table = 'demand_animal_has_fundation'; // Establece el nombre de la tabla

    protected $fillable = ['demands_animals_id','fundation_id','description', 'statusfund_id'];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $existingRecord = self::where('demands_animals_id', $model->demands_animals_id)
                ->where('fundation_id', $model->fundation_id)
                ->first();

            if ($existingRecord) {
                throw new \Exception('Ya existe un registro con esa demanda y esa fundación. Seleccione otra fundación.');
            }
        });
    }


    public function Demands_animalss()
    {
        return $this->belongsTo(Demands_animalss::class, 'demands_animals_id');
    }

    public function Fundation()
    {
        return $this->belongsTo(Fundation::class, 'fundation_id');
    }

    public function statusfund()
    {
        return $this->belongsTo(statusfund::class, 'statusfund_id');
    }

}
