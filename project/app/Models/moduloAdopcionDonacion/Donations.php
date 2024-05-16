<?php

namespace App\Models\moduloAdopcionDonacion;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donations extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'type_donation',
        'description_ref',
        'qty',
        'photo_ref',
        'destino_fundacion',
        'users_id',
    ];

    /* relacion uno a muchos users */

    public function user(){
        return $this->belongsTo(User::class,'users_id', 'id');
    }
}