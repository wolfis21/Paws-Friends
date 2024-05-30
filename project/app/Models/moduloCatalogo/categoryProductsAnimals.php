<?php

namespace App\Models\moduloCatalogo;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoryProductsAnimals extends Model
{
    protected $table = 'product_category_animals';

    protected $fillable = ['name', 'category_id'];
    use HasFactory;
}