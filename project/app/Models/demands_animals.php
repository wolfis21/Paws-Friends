<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class demands_animals extends Model
{
    use HasFactory;

    protected $table = 'demands_animals'; // Establece el nombre de la tabla

    protected $fillable = [
        'description_case',
        'adress_animals',
        'photo_ref',
        'types_status_id',
    ];

    public function type_status()
    {
        return $this->belongsTo(type_status::class, 'types_status_id');
    }
}
