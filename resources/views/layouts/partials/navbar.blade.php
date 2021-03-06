<nav class="navbar navbar-inverse navbar-fixed-top sidebar" id="sidebar" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <img src="images/{{ Auth::user()->matricula }}/avatar.jpg" alt="" class="img-circle">
            <span class="navbar-brand">{{ Auth::user()->dado->nome }}</span>
        </div>
        <div>
            <ul class="nav navbar-nav">
                <li class="{{ Request::is('/') ? 'active' : '' }}">
                    <a href="/">
                        Pagina inicial<span class="glyphicon glyphicon-home"/>
                    </a>
                </li>
                <li class="{{ Request::is('boletim') ? 'active' : '' }}">
                    <a href="boletim">
                        Boletim<span class="glyphicon glyphicon-education"/>
                    </a>
                </li>
                <li class="{{ Request::is('corpodocente') ? 'active' : '' }}">
                    <a href="corpodocente">
                        Corpo Docente<span class="glyphicon glyphicon-apple"/>
                    </a>
                </li>
                <li class="{{ Request::is('graficos') ? 'active' : ''}}">
                    <a href="graficos">
                        Gráficos<span class="glyphicon glyphicon-stats"/>
                    </a>
                </li>
                <li class="{{ Request::is('mural') ? 'active' : '' }}">
                    <a href="mural">
                        Mural<span class="glyphicon glyphicon-list-alt"/>
                    </a>
                </li>
                <li class="{{ Request::is('ocorrencias') ? 'active' : '' }}">
                    <a href="ocorrencias">
                        Ocorrências<span class="glyphicon glyphicon-alert"/>
                    </a>
                </li>
                <li class="{{ Request::is('perfil') ? 'active' : '' }}">
                    <a href="perfil">
                        Perfil<span class="glyphicon glyphicon-user"/>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        Temas <span class="caret"></span><span class="glyphicon glyphicon-tint"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        @foreach(\App\Tema::orderBy('nome')->get() as $tema)
                            <li><a href="tema/{{ $tema->id }}">{{ $tema->nome }}</a></li>
                        @endforeach
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>