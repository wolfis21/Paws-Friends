<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permissions extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function rols(){
        return $this->belongsToMany(Rols::class, 'permission_rol', 'permission_id', 'rol_id');
    }
}
