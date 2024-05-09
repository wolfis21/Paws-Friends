<?php

namespace App\Models\moduloServicios;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Veterinarian extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'link_ref',
        'img_ref',
        'specialist_animals',
        'all_puntuation',
        'puntuation'
    ];


};
