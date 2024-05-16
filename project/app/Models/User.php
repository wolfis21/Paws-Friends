<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'last_name',
        'dni',
        'phone',
        'address',
        'photo_user',
        'photo_dni',
        'photo_rif',
        'email',
        'password',
        'rols_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected function name(): Attribute{
        return new Attribute(
            //todo transformar el valor la primeras en mayusculas accesorio
            get: function($value){
                return ucwords($value);
            },

            //para las funciones flechas
            // set: fn($value) => strtolower($value),

            // todo transformar todas a minusculas mutador
            set: function($value){
                return strtolower($value);
            }
        );
    }
    public function rol(){
        return $this->belongsTo(Rols::class,'rols_id', 'id');
    }
}
