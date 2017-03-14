@extends('master')  @section('titulo', 'Home')   @section('contenido')



                <h3 class="text-center">Hoja de Entrenamiento</h3>
                <h5 class="text-center">Selecciona con quien quieres entrenar</h5> 

                 @if (session('error'))
                 <div class="alert alert-danger alert-dismissable text-center">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    {{session('error')}}
                </div>
                @endif

                @if (session('titulo'))
                    <script>$(window).load(function(){$('#myModal').modal('show');});</script>
                    {!! modal(session('titulo'), session('mensaje'), session('oro'), session('diamond')) !!}                    
                @endif
                


                <div class="col-md-12"> <!-- Contenedor de los 3 entrenadores -->

                    <div class="col-md-12"> <!-- Contenedor del Mago --><br /> <br />
                        <div class="panel panel-default"> 
                            <div class="panel-body panelEntrenamiento">
                                <div class="col-md-4"><img src="{{asset ('images/entrenamiento/mago.png')}}" alt="Mago"></div>
                                <div class="col-md-8">
                                    <div class="col-md-12 modalRec">
                                        <h4 class="text-center">Entrenador de Inteligencia</h4>
                                        <span> Hola! Mi nombre es Albus, soy el mago de la ciudad... Conmigo podras entrenar tu Inteligencia con la cual podras lanzar hechizos mas poderosos y tener mayor mana.</span>
                                    </div>
                                    <div class="col-md-12"><br /> 
                                        <div class="col-md-12 text-center ">
                                            <form method="POST" onsubmit="return entrenar()">
                                            <button type="button" onclick="entrenar('{{entrenarOroInt($stats->inteligencia)}}', 'inteligencia')" class="btn btn-success btn-block">Aumentar nivel de Inteligencia por <img src="{{asset ('images/personaje/oro.png')}}" alt="oro"> {{entrenarOroInt($stats->inteligencia)}} </span></a>
                                            </form>
                                        </div><br /> <br />  
                                        <div class="col-md-12 text-center modalRec "><h5>Nivel actual de Inteligencia: {{$stats->inteligencia}}</h5></div><br /><br />
                                        <br /><br /> <h6 class="text-center modalRec">Posibilidad de mejorar el stat de Magia</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12"> <!-- Contenedor del Guerrero --><br /> <br />
                        <div class="panel panel-default"> 
                            <div class="panel-body panelEntrenamiento modalRec">
                                <div class="col-md-4"><img src="{{asset ('images/entrenamiento/guerrero.png')}}" alt="Guerrero"></div>
                                <div class="col-md-8">
                                    <div class="col-md-12">
                                        <h4 class="text-center">Entrenador de Fuerza</h4>
                                        <span> Hola! Mi nombre es Arthur, soy el instructor de lucha... Conmigo podras entrenar tu fuerza, mejorar tu agilidad y volverte un guerrero mas poderoso.</span>
                                    </div>
                                    <div class="col-md-12"><br /> 
                                        <div class="col-md-12 text-center">
                                            <button type="button" onclick="entrenar('{{entrenarOroFue($stats->fuerza)}}', 'fuerza')" class="btn btn-success btn-block">Aumentar nivel de Fuerza por <img src="{{asset ('images/personaje/oro.png')}}" alt="oro"> {{entrenarOroFue($stats->fuerza)}} </span></a>
                                        </div><br /> <br />  
                                        <div class="col-md-12 text-center modalRec "><h5>Nivel actual de Fuerza: {{$stats->fuerza}}</h5></div><br /> <br /> 
                                        <br /><br /> <h6 class="text-center modalRec">Posibilidad de mejorar el stat de Defensa</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12"> <!-- Contenedor del Comerciante --><br /> <br /> 
                        <div class="panel panel-default">
                            <div class="panel-body panelEntrenamiento modalRec">
                                <div class="col-md-4"><img src="{{asset ('images/entrenamiento/comerciante.png')}}" alt="Comerciante"></div>
                                <div class="col-md-8">
                                    <div class="col-md-12">
                                        <h4 class="text-center">Entrenador de Carisma</h4>
                                        <span> Hola!... pasa, pasa...mi nombre es Jeff, soy uno de los comerciantes de la ciudad..EL MEJOR COMERCIANTE DE LA CIUDAD...y por una modica suma puedo enseñarte el oficio, je je je...</span>
                                    </div>
                                    <div class="col-md-12"><br /> 
                                        <div class="col-md-12 text-center">
                                            <button type="button" onclick="entrenar('{{entrenarOroCar($stats->carisma)}}', 'carisma')" class="btn btn-success btn-block">Aumentar nivel de Carisma por <img src="{{asset ('images/personaje/oro.png')}}" alt="oro"> {{entrenarOroCar($stats->carisma)}} </span></a>
                                        </div><br /> <br />  
                                        <div class="col-md-12 text-center modalRec "><h5>Nivel actual de Carisma: {{$stats->carisma}}</h5></div><br /> <br /> 
                                        <br /><br /> <h6 class="text-center modalRec">Posibilidad de mejorar el stat de Comercio</h6>   
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12"> <!-- Contenedor del Arquero --><br /> <br /> 
                        <div class="panel panel-default">
                            <div class="panel-body panelEntrenamiento modalRec">
                                <div class="col-md-4"><img src="{{asset ('images/entrenamiento/arquero.png')}}" alt="Arquero"></div>
                                <div class="col-md-8">
                                    <div class="col-md-12">
                                        <h4 class="text-center">Entrenador de Agilidad</h4>
                                        <span> Hola!... Mi nombre es Hoodael, soy miembro de la antigua guardia nocturna, yo puedo entrenarte  para mejorar tu agilidad</span>
                                    </div>
                                    <div class="col-md-12"><br /> 
                                        <div class="col-md-12 text-center">
                                            <button type="button" onclick="entrenar('{{entrenarOroAgi($stats->agilidad)}}', 'agilidad')" class="btn btn-success btn-block">Aumentar nivel de Agilidad por <img src="{{asset ('images/personaje/oro.png')}}" alt="oro"> {{entrenarOroAgi($stats->agilidad)}} </span></a>
                                        </div><br /> <br />  
                                        <div class="col-md-12 text-center modalRec "><h5>Nivel actual de Agilidad: {{$stats->agilidad}}</h5></div><br /> <br /> 
                                        <br /><br /> <h6 class="text-center modalRec">Posibilidad de mejorar el stat de Evasion</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12"> <!-- Contenedor del monje --><br /> <br /> 
                        <div class="panel panel-default">
                            <div class="panel-body panelEntrenamiento modalRec">
                                <div class="col-md-4"><img src="{{asset ('images/entrenamiento/monje.png')}}" alt="Monje"></div>
                                <div class="col-md-8">
                                    <div class="col-md-12">
                                        <h4 class="text-center">Entrenador de Constitucion</h4>
                                        <span> Hola!... Soy un monje del templo Irahk... Los monjes del templo creemos que la unica manera de volverse mas fuerte es espiritualmente...¿Por que no lo intentas?</span>
                                    </div>
                                    <div class="col-md-12"><br /> 
                                        <div class="col-md-12 text-center">
                                            <button type="button" onclick="entrenar('{{entrenarOroCon($stats->constitucion)}}', 'constitucion')" class="btn btn-success btn-block">Aumentar nivel de Constitucion por <img src="{{asset ('images/personaje/oro.png')}}" alt="oro"> {{entrenarOroCon($stats->constitucion)}} </span></a>
                                        </div><br /> <br />  
                                        <div class="col-md-12 text-center modalRec "><h5>Nivel actual de Constitucion: {{$stats->constitucion}}</h5></div><br /> <br /> 
                                        <br /><br /> <h6 class="text-center modalRec">Posibilidad de mejorar el stat de Supervivencia</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    <div class="col-md-12"> <!-- Contenedor del Aventurero --><br /> <br /> 
                        <div class="panel panel-default">
                            <div class="panel-body panelEntrenamiento modalRec">
                                <div class="col-md-4"><img src="{{asset ('images/entrenamiento/aventurero.png')}}" alt="Aventurero"></div>
                                <div class="col-md-8">
                                    <div class="col-md-12">
                                        <h4 class="text-center">Entrenador de Stamina</h4>
                                        <span> Hola!... Mi nombre es Hunter, soy un aventurero que ama escalar, ¿que mejor manera de aumentar tu energia que largas caminatas por las montañas?</span>
                                    </div>
                                    <div class="col-md-12"><br /> 
                                        <div class="col-md-12 text-center">
                                            <button type="button" onclick="entrenar('{{entrenarOroSta($stats->stamina)}}', 'stamina')" class="btn btn-success btn-block">Aumentar nivel de Stamina por <img src="{{asset ('images/personaje/oro.png')}}" alt="oro"> {{entrenarOroSta($stats->stamina)}} </span></a>
                                        </div><br /> <br />  
                                        <div class="col-md-12 text-center modalRec "><h5>Nivel actual de Stamina: {{$stats->stamina}}</h5></div><br /> <br /> 
                                        <br /><br /> <h6 class="text-center modalRec">Posibilidad de mejorar el stat de Energia</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <form method="POST" name="formEntrenar" id="formEntrenar">
                    {{ csrf_field() }}
                    <input type="hidden" value="" name="oro" id="oro">
                    <input type="hidden" value="" name="stat" id="stat">
                </form>

                <script> 
                    function entrenar($oro, $stat){ 
                    document.getElementById("oro").value = $oro;
                    document.getElementById("stat").value = $stat;
                    document.getElementById("formEntrenar").submit(); 
                    } 
                </script>

@endsection


