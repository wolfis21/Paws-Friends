<?php

namespace App\Models\moduloServicios;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table = 'comments';

    protected $fillable = [
        'data_text',
        'date'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
    
    use HasFactory;
}
