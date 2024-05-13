<?php

namespace App\Models\moduloAdopcionDonacion;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserAdopcion extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'AnimalsAdoption_id',
        'date',
        'status_adoption',
    ];

    /* relacion muchos a muchos users y animals_adoption */

    public function user(){
        return $this->belongsTo(User::class,'users_id', 'id');
    }
    public function animals_adoptions(){
        return $this->belongsTo(AnimalsAdoption::class,'AnimalsAdoption_id', 'id');
    }
}