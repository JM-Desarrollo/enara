<nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <!-- Brand and toggle get grouped for better mobile display -->
                            <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="#">Bienvenido {{Auth::User()->name}} !</a>
                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#">Mi Personaje <span class="sr-only">(current)</span></a></li>
                                <li><a href="">Ciudad</a></li>
                                <li><a href="">Misiones</a></li>
                                <li><a href="">Coliseo</a></li>
                                <li><a href="">Torneo</a></li>
                                <li><a href="">Evento</a></li>
                            </ul>
                            <ul class="nav navbar-nav navbar-right">
                                <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mi Cuenta <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Editar Perfil</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li>
                                        <a href="{{ url('/logout') }}"   onclick="event.preventDefault();  document.getElementById('logout-form').submit();">Cerrar Sesion</a>
                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">{{ csrf_field() }}</form>
                                    </li>
                                </ul>
                                </li>
                            </ul>
                            </div><!-- /.navbar-collapse -->
                        </div><!-- /.container-fluid -->
</nav>