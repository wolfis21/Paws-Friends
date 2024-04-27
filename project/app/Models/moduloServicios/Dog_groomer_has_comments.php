<?php

namespace App\Models\moduloServicios;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dog_groomer_has_comments extends Model
{
    protected $table = 'dog_groomer_has_comments';

    public function dog_groomer(){
        return $this->belongsTo(Dog_groomer::class, 'dog_groomer_id', 'id');
    }

    public function comments(){
        return $this->belongsTo(Comment::class, 'comments_id', 'id');
    }
    use HasFactory;
}
