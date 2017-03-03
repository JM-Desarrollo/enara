<div class="panel panel-default">
    <div class="panel-heading"><h3 class="panel-title">Recursos</h3></div>
    <div class="panel-body">
        <img src="{{url('images/personaje/oro.png')}}" /> <b>Oro</b> <div class="anchoFull colorGris">{{vidaPersonaje(Auth::User()->oro)}}</div><br />
        <img src="{{url('images/personaje/diamond.png')}}" /> <b>Diamantes</b> <div class="anchoFull colorGris">{{vidaPersonaje(Auth::User()->diamond)}}</div><br />
        <img src="{{url('images/personaje/esquirla.png')}}" /> <b>Esquirlas</b> <div class="anchoFull colorGris">{{vidaPersonaje(Auth::User()->esquierla)}}</div><br />
        <img src="{{url('images/personaje/ptshonor.png')}}" /> <b>Puntos de Honor</b> <div class="anchoFull colorGris">{{vidaPersonaje(Auth::User()->ptsHonor)}}</div><br />
        <img src="{{url('images/personaje/ptsEvent.png')}}" /> <b>Puntos de Evento</b> <div class="anchoFull colorGris">{{vidaPersonaje(Auth::User()->ptsEvent)}}</div><br />
        <img src="{{url('images/personaje/ptstorneo.png')}}" /> <b>Puntos de Torneo</b> <div class="anchoFull colorGris">{{vidaPersonaje(Auth::User()->ptsTorneo)}}</div><br />
    </div>
 </div>

 <div class="panel panel-default">
    <div class="panel-heading"><h3 class="panel-title">Coliseo</h3></div>
    <div class="panel-body">
        Tickets: 5<br />
        Rank: Bronce<br />
        Nivel: 250<br />
    </div>
 </div>

<div class="panel panel-default">
    <div class="panel-heading"><h3 class="panel-title">Torneos</h3></div>
    <div class="panel-body">
         Torneo Gladiador<br />
        Finaliza en: 3 dias<br />
        Ingresar<br />
    </div>
</div>

<div class="panel panel-default">
    <div class="panel-heading"><h3 class="panel-title">Eventos</h3></div>
    <div class="panel-body">
        Evento Luna Roja<br />
        Dias Restantes: 13 Dias 8 Horas<br />
        Entrar al Evento<br />
    </div>
</div>