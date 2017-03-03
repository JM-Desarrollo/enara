<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Habilidad extends Model
{
    protected $table = "habilidad";
    
    public function user(){
        return $this->belongsTo(User::Class);
    }
}
