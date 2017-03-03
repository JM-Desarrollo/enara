<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Raza extends Model
{
   protected $table = "raza";
   
    public function user(){
        return $this->hasMany(User::Class);
    }
}
