<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stats extends Model
{
    protected $fillable = [
        'vida', 'vidaExtra', 'vidaMax', 'mana', 'manaExtra', 'manaMax', 'energia', 'energiaMax', 'energiaExtra',
        'suerte', 'evasion', 'supervivencia', 'defensa', 'combateArms', 'combateDist', 'probCritico', 'dannoCritico', 
        'bloqueo', 'regvida', 'regMana', 'velAtaque', 'pesca', 'mineria', 'herreria', 'carpinteria', 'sastreria', 
        'idUser',
    ];
    
    public function user(){
        return $this->belongsTo(User::Class);
    }
}
