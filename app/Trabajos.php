<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trabajos extends Model
{
   protected $table = "trabajo";

   protected $fillable = [
        'name', 'paga', 'recPos', 'recChance', 'habNec', 'habMin',
    ];

}
