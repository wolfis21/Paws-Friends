<?php

namespace App\Models\moduloAdopcionDonacion;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimalsAdoption extends Model
{
    use HasFactory;

    protected $table = 'animals_adoptions';

    protected $fillable = [
        'name',
        'species',
        'animal_race',
        'sex_animal',
        'age_animal',
        'description_animals',
        'photo_animal',
        'location_address',
        'rescues_id',
        'status'
    ];

    /* relacion muchos a muchos con user-animals-adopcion */

/*     public function rescue(){ AUN NO AGREGADO
        return $this->belongsTo(Rescues::class,'rescues_id', 'id');
    } */
}
