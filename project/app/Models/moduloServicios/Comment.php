<?php

namespace App\Models\moduloServicios;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    protected $fillable = [
        'data_text',
        'date',
        'accepted',
        'users_id'
    ];

    public function users(){
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
    use HasFactory;
}
