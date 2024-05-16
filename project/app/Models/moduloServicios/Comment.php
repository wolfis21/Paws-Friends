<?php

namespace App\Models\moduloServicios;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

        // campos permitidos
    protected $fillable = [
        'data_text',
        'date',
        'accepted',
        'users_id'
    ];

    protected $guarded = []; //campos protegidos guardaria todo menos el capo que se refleje dentro de este arreglo por seguridad
    public function users(){
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
    use HasFactory;
}
