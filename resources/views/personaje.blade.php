@extends('master')  @section('titulo', 'Home')   @section('contenido')
@php $equipado = getEquip() @endphp
<h2 class="text-center">Vista General del Personaje</h2><br />


<div class="row">
    <div class="col-md-5">
        <div class="col-md-12 text-center"><b>Armas</b></div>
        <div class="col-md-12 text-center">
            <div class="col-md-6">
                @if(!(is_null($equipado->manoPrincipal)))
                    {{ getImgEquip($equipado->manoPrincipal)}}
                @else   
                    <img src="{{asset('images/personaje/equipo/manoPrincipal.png')}} ">
                @endif
            </div>

            <div class="col-md-6">
                @if(!(is_null($equipado->manoSecundaria)))
                    <img src="{{getImgEquip($equipado->manoSecundaria)}} " class="{{getCalEquip($equipado->manoSecundaria)}}">
                @else   
                    <img src="{{asset('images/personaje/equipo/manoSecundaria.png')}} ">
                @endif
            </div>
        </div>

        <div class="col-md-12 text-center"><br /><br /><b>Anillos y Amuletos</b></div>
        <div class="col-md-12 text-center">
            <div class="col-md-6">
                @if(!(is_null($equipado->manoPrincipal)))
                    {{ getImgEquip($equipado->manoPrincipal)}}
                @else   
                    <img src="{{asset('images/personaje/equipo/manoPrincipal.png')}} ">
                @endif
            </div>

            <div class="col-md-6">
                @if(!(is_null($equipado->manoSecundaria)))
                    <img src="{{getImgEquip($equipado->manoSecundaria)}} " class="{{getCalEquip($equipado->manoSecundaria)}}">
                @else   
                    <img src="{{asset('images/personaje/equipo/manoSecundaria.png')}} ">
                @endif
            </div>
        </div>
        
    </div>

    <div class="col-md-3">
         @if(Auth::User()->idRaza == 1)
            <img src="{{asset('images/registro/humanoON.jpg')}}" width="180px">
        @else
            @if(Auth::User()->idRaza == 2)
            <img src="{{asset('images/registro/elfoON.jpg')}} ">
            @else
                @if(Auth::User()->idRaza == 3)
                    <img src="{{asset('images/registro/enanoON.jpg')}} ">
                @else
                    @if(Auth::User()->idRaza == 4)
                        <img src="{{asset('images/registro/effynON.jpg')}} ">
                    @endif            
                @endif      
            @endif   
        @endif
    </div>

    <div class="col-md-4">
        <div class="col-md-12 text-center"><b>Equipamentos</b></div>
        <div class="col-md-12 text-center">
            <div class="col-md-6">
                @if(!(is_null($equipado->manoPrincipal)))
                    {{ getImgEquip($equipado->manoPrincipal)}}
                @else   
                    <img src="{{asset('images/personaje/equipo/manoPrincipal.png')}} ">
                @endif
            </div>

            <div class="col-md-6">
                @if(!(is_null($equipado->manoSecundaria)))
                    <img src="{{getImgEquip($equipado->manoSecundaria)}} " class="{{getCalEquip($equipado->manoSecundaria)}}">
                @else   
                    <img src="{{asset('images/personaje/equipo/manoSecundaria.png')}} ">
                @endif
            </div>
        </div>

        <div class="col-md-12 text-center"><b><br /><br />Otros</b></div>
        <div class="col-md-12 text-center">
            <div class="col-md-6">
                @if(!(is_null($equipado->manoPrincipal)))
                    {{ getImgEquip($equipado->manoPrincipal)}}
                @else   
                    <img src="{{asset('images/personaje/equipo/manoPrincipal.png')}} ">
                @endif
            </div>

            <div class="col-md-6">
                @if(!(is_null($equipado->manoSecundaria)))
                    <img src="{{getImgEquip($equipado->manoSecundaria)}} " class="{{getCalEquip($equipado->manoSecundaria)}}">
                @else   
                    <img src="{{asset('images/personaje/equipo/manoSecundaria.png')}} ">
                @endif
            </div>
        </div>
    </div>


</div>

    

    

    


<div class="col-md-12"><br /><br />
    <table class="table text-center">
        <tr>
            <td class="warning" colspan="2"><strong>Fuerza</strong></td>
            <td class="warning"><strong>Agilidad</strong></td>
            <td class="warning" colspan="2"><strong>Inteligencia</strong></td>
            <td class="warning"><strong>Constitucion</strong></td>
            <td class="warning" colspan="2"><strong>Stamina</strong></td>
        </tr>

        <tr>
            <td class="active" colspan="2">{{$personaje->fuerza}}</td>
            <td class="active">{{$personaje->agilidad}}</td>
            <td class="active" colspan="2">{{$personaje->inteligencia}}</td>
            <td class="active">{{$personaje->constitucion}}</td>
            <td class="active" colspan="2">{{$personaje->stamina}}</td>
        </tr>

        <tr>
            <td class="warning"><strong>Vida</strong></td>
            <td class="warning"><strong>Mana</strong></td>
            <td class="warning"><strong>Energia</strong></td>
            <td class="warning" colspan="2"><strong>Reg. de Vida</strong></td>
            <td class="warning" colspan="2"><strong>Reg. de Mana</strong></td>
            <td class="warning"><strong>Reg. de Energia</strong></td>
        </tr>

        <tr>
            <td class="active">{{$personaje->vidaMax}}</td>
            <td class="active">{{$personaje->manaMax}}</td>
            <td class="active">{{$personaje->energiaMax}}</td>
            <td class="active" colspan="2">{{$personaje->regVida}}</td>
            <td class="active" colspan="2">{{$personaje->regMana}}</td>
            <td class="active">{{$personaje->regEnergia}}</td>
        </tr>

        <tr>
            <td class="warning"><strong>Suerte</strong></td>
            <td class="warning"><strong>Evasion</strong></td>
            <td class="warning"><strong>Defensa</strong></td>
            <td class="warning"><strong>Res. Magica</strong></td>
            <td class="warning"><strong>Prob. Critico</strong></td>
            <td class="warning"><strong>Daño Critico</strong></td>
            <td class="warning"><strong>Bloqueo</strong></td>
            <td class="warning"><strong>Iniciativa</strong></td>
        </tr>

        <tr>
            <td class="active">{{$personaje->suerte}}</td>
            <td class="active">{{$personaje->evasion}}</td>
            <td class="active">{{$personaje->defensa}}</td>
            <td class="active">{{$personaje->resMagica}}</td>
            <td class="active">{{$personaje->probCritico}}</td>
            <td class="active">{{$personaje->dannoCritico}}</td>
            <td class="active">{{$personaje->bloqueo}}</td>
            <td class="active">{{$personaje->velAtaque}}</td>
        </tr>

        <tr>
            <td class="warning" colspan="2"><strong>Pesca</strong></td>
            <td class="warning"><strong>Mineria</strong></td>
            <td class="warning" colspan="2"><strong>Herreria</strong></td>
            <td class="warning"><strong>Carpinteria</strong></td>
            <td class="warning" colspan="2"><strong>Sastreria</strong></td>
        </tr>

        <tr>
            <td class="active" colspan="2">{{$personaje->pesca}}</td>
            <td class="active">{{$personaje->mineria}}</td>
            <td class="active" colspan="2">{{$personaje->herreria}}</td>
            <td class="active">{{$personaje->carpinteria}}</td>
            <td class="active" colspan="2">{{$personaje->sastreria}}</td>
        </tr>
    </table>
  


            
</div>
                


@endsection
