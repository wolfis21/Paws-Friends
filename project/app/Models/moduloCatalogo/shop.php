<?php

namespace App\Models\moduloCatalogo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    protected $table = 'shops';
    /**
     * Indica qué campos pueden ser llenados.
     *
     * @var array
     */


    protected $fillable = [
        'name', 
        'address', 
        'phone', 
        'mail', 
        'link_ref'
    ];

   
}

