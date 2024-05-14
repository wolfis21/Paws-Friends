<?php

namespace App\Models\moduloServicios;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veterinarians_has_comments extends Model
{
    protected $table = 'veterinarians_has_comments';

    protected $fillable = [
        'comments_id',
        'veterinarians_id',
        'created_at',
        'updated_at',
    ];
    public function veterinarians(){
        return $this->belongsTo(Veterinarian::class,'veterinarians_id','id');
    }
    public function comments(){
        // return $this->belongsTo(Comment::class, 'comments_id', 'id');
        return $this->belongsTo(Comment::class, 'comments_id', 'id');
    }
    use HasFactory;
}
