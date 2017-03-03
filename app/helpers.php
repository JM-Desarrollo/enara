<?php

function currentUser()
{
    return auth()->user();
}

function vidaPersonaje($constitucion)
{
    return ($constitucion * 150);
}

function staminaPersonaje($stamina, $const)
{
    return ($stamina + ($const * 5));
}

function manaPersonaje($int)
{
    return ($int * 200);
}

function oroPersonaje($constitucion)
{
    return ($constitucion * 150);
}