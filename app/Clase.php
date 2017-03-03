<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
   
    protected $table = "clase";

    public function user(){
        return $this->hasMany(User::Class);
    }
}
