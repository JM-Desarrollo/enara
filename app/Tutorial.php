<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutorial extends Model
{
    protected $table = "tutorial";

    protected $fillable = [
        'trabajo', 'entrenamiento', 'armero', 'herrero', 'alquimista', 'sastre', 'destacado'
    ];

    public function user(){
        return $this->belongsTo(User::Class);
    }
}
