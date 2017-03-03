
                    <div class="panel panel-default"> <!-- MI PERSONAJE -->
                        <div class="panel-heading"><h3 class="panel-title">Mi Personaje</h3></div>
                        <div class="panel-body">
                            <span class="label label-default">Nivel: {{Auth::User()->level}}</span><br />
                            <div class="progress progress-striped active">
                                <div class="progress-bar" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">{{Auth::User()->exp}} / 4000</div>
                            </div>
                            <img src="{{url('images/personaje/life.png')}}" /><div class="anchoFull colorRed">{{vidaPersonaje(Auth::User()->const)}}</div><br />
                            <img src="{{url('images/personaje/stamina.png')}}" /><span class="label label-warning">{{staminaPersonaje(Auth::User()->stamina, Auth::User()->const)}}</span><br />
                            <img src="{{url('images/personaje/mana.png')}}" /><span class="label label-info">{{manaPersonaje(Auth::User()->inteligencia)}}</span><br />
                        </div>
                    </div>


                    <div class="panel panel-default"> <!-- CIUDAD -->
                        <div class="panel-heading"><h3 class="panel-title">Ciudad</h3></div>
                        <div class="panel-body">
                            Vista General<br />
                            Gobernador<br />
                            Trabajo<br />
                            Entrenamiento<br />
                            Armero<br />
                            Herrero<br />
                            Alquimista<br />
                            Pescaderia<br />
                        </div>
                    </div>

                    <div class="panel panel-default">
                        <div class="panel-heading"><h3 class="panel-title">Misiones</h3></div>
                        <div class="panel-body">
                            <b>Principales</b><br />
                                El misterio de Robert<br />
                                El Hijo Bastardo<br /><br />
                            <b>Secundarias</b><br />
                                El recado de Brynn<br />
                                La pocion de Thart<br />
                                La enfermedad Incurable<br /><br />
                            <b>Globales</b><br />
                                La defensa del Bosque Whyn<br />
                        </div>
                    </div>