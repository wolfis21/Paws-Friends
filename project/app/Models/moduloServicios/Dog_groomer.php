<?php

namespace App\Models\moduloServicios;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dog_groomer extends Model
{
    protected $table = 'dog_groomer';
    protected $fillable = [
        'name' ,
        'address' ,
        'phone' ,
        'link_ref' ,
        'img_ref' ,
        'all_puntuation',
        'puntuation'
    ];
    use HasFactory;
}
