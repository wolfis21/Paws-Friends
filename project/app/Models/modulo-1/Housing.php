<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Housing extends Model
{
    protected $table = 'housings';

    protected $fillable = [
        'address' ,
        'phone' ,
        'description_location' ,
        'type_animals' ,
        'food_offer' ,
        'img_ref' 
    ];

    use HasFactory;
}
