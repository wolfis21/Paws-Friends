<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demands_animalss extends Model
{
    use HasFactory;

    protected $table = 'demands_animals'; // Establece el nombre de la tabla

    protected $fillable = ['users_id','description_case','adress_animals','photo_ref','motivo_id', 'urgencia_id','types_status_id', 'statusfund_id'];

    public function User(){
        return $this->belongsTo(User::class, 'users_id');
    }

    public function Motivo(){
        return $this->belongsTo(Motivo::class, 'motivo_id');
    }

    public function Urgencia(){
        return $this->belongsTo(Urgencia::class, 'urgencia_id');
    }

    public function types_status(){
        return $this->belongsTo(types_status::class, 'types_status_id');
    }
    public function statusfund(){
        return $this->belongsTo(statusfund::class, 'statusfund_id');
    }
}
