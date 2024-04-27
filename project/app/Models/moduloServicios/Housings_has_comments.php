<?php

namespace App\Models\moduloServicios;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Housings_has_comments extends Model
{
    protected $table = 'housings_has_comments';

    public function housings(){
        return $this->belongsTo(Housing::class, 'housings_id', 'id');
    }

    public function comments(){
        return $this->belongsTo(Comment::class, 'comments_id', 'id');
    }

    use HasFactory;
}
