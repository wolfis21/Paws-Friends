<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    protected $fillable = ['name', 'description', 'img_ref', 'user_id'];

    // Relación con el usuario administrador que creó la categoría
    public function admin()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Relación con los productos pertenecientes a esta categoría
    public function products()
    {
        return $this->hasMany(products::class);
    }
}

