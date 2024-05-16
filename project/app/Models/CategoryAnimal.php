<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryAnimal extends Model
{
    protected $table = 'categories_animal';

    protected $fillable = ['name', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
