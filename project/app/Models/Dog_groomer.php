<?php

namespace App\Models;

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
        'img_ref' 
    ];
    use HasFactory;
}
