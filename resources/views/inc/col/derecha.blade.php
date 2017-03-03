<div class="panel panel-default">
    <div class="panel-heading"><h3 class="panel-title">Recursos</h3></div>
    <div class="panel-body">
        <img src="{{url('images/personaje/oro.png')}}" />{{manaPersonaje(Auth::User()->oro)}}<br />
        Esquirlas: {{Auth::User()->esquirla}} <br />
        Diamantes: {{Auth::User()->diamond}}<br />
        Puntos de Honor: {{Auth::User()->ptsHonor}}<br /> 
        Puntos de Evento: {{Auth::User()->ptsEvent}}<br />
        Puntos de Torneo: {{Auth::User()->ptsTorneo}}
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