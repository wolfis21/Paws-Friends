<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rols extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function permissions(){
        return $this->belongsToMany(Permissions::class, 'permission_rol', 'rol_id', 'permission_id');
    }
}
