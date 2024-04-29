<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shops extends Model
{
    use HasFactory;

    /**
     * Indica que campos pueden ser llenados.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'address', 'phone', 'mail',
    ];

    /**
     * Indica que campos deben ser protegidos contra asignación masiva.
     *
     * @var array
     */
    protected $guarded = ['id'];

    /**
     * Método para establecer la referencia del enlace por el administrador.
     *
     * @param  string  $value
     * @return void
     */
    public function setLinkRefAttribute($value)
    {
        // Lógica para establecer la referencia del enlace aquí
        // Por ejemplo, podrías generar una URL única basada en el nombre de la tienda
        // y guardarla en el campo 'link_ref'
        $this->attributes['link_ref'] = $value;
    }

    /**
     * Obtiene el usuario administrador que creó la tienda.
     */
    public function admin()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
