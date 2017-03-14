<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name', 'email', 'password', 'gold', 'diamond', 'idClase', 'idRaza',
    ];


    public function raza(){
        return $this->belongsTo(Raza::Class);
    }

    public function clase(){
        return $this->belongsTo(Clase::Class);
    }

    public function habilidad(){
        return $this->belongsTo(Habilidad::Class);
    }

    public function trabajo(){
        return $this->belongsTo(Trabajo::Class);
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
