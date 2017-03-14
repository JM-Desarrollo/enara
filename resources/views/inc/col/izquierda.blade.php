                    @php
                    $stats = statsPersonaje(Auth::User()->id);
                    @endphp
                    <div class="panel panel-default"> <!-- MI PERSONAJE -->
                        <div class="panel-heading"><img src="{{url('images/personaje/personaje.png')}}" /> Mi Personaje</h3></div>
                        <div class="panel-body">
                            <img src="{{url('images/personaje/level.png')}}" /> <b>Nivel</b> {{Auth::User()->level}} ({{Auth::User()->exp}} / 400)<br />
                            <div class="progress progress-striped active">
                                <div class="progress-bar text-center" role="progressbar" aria-valuenow="500" aria-valuemin="0" aria-valuemax="400" style="width: {{(Auth::User()->exp * 100)/400}}%"></div>
                            </div>
                            <img src="{{url('images/personaje/life.png')}}" /> <b>Vida</b> <div class="anchoFull colorRed">{{$stats->vida}} / {{$stats->vidaMax}}</div><h6>Regeneracion por hora: 58</h6><br />
                            <img src="{{url('images/personaje/stamina.png')}}" /> <b>Stamina</b><div class="anchoFull colorYellow">{{$stats->energia}} / {{$stats->energiaMax}}</div><h6>Regeneracion por hora: 20</h6><br />
                            <img src="{{url('images/personaje/mana.png')}}" /> <b>Mana</b><div class="anchoFull colorBlue">{{$stats->mana}} / {{$stats->manaMax}}</div>
                        </div>
                    </div>


                    <div class="panel panel-default"> <!-- CIUDAD -->
                        <div class="panel-heading"><img src="{{url('images/ciudad/city.png')}}" /> Ciudad</h3></div>
                        <div class="panel-body">
                            Vista General<br />
                            <a href="trabajo">Trabajo</a><br />
                            <a href="entrenamiento">Entrenamiento</a><br />
                            <a href="armeria">Armeria</a><br />
                            <a href="herreria">Herreria</a><br />
                            <a href="alquimista">Alquimista</a><br />
                            <a href="sastreria">Sastreria</a><br />
                        </div>
                    </div>

                 