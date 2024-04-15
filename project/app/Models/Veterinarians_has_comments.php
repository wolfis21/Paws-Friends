<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veterinarians_has_comments extends Model
{
    protected $table = 'veterinarians_has_comments';

    public function veterinarians(){
        return $this->belongsTo(Veterinarian::class,'veterinarians_id','id');
    }
    public function comments(){
        return $this->belongsTo(Comments::class, 'comments_id', 'id');
    }
    use HasFactory;
}
