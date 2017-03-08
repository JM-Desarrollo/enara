<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserJob extends Model
{
    protected $table = "userJob";

    protected $fillable = [
        'idUser', 'idTrabajo', 'duracion', 'inicio', 'fin',
    ];

    protected $dates = [
        'fin',

    ];
}
