<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <abbr title="Business Ideas Group">
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="{{asset('img/logo.jpg')}}"/>
                </a>
            </abbr>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            
                {{-- 
                <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Inicia sesión</a></li>
                    <li><a href="{{ url('/register') }}">Registrate</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                        </ul>
                    </li>
                </ul>
                @endif --}}
                
                <ul class="nav navbar-nav navbar-right">
                    <li {!! Request::is('/') ? 'class=active' : '' !!}><a href="{{url('/')}}">Inicio</a></li>
                    <li {!! Request::is('about') ? 'class=active' : '' !!}><a href="{{url('about')}}">Nosotros</a></li>
                    <li {!! Request::is('event') ? 'class=active' : '' !!}><a href="{{url('event')}}">Eventos</a></li>
                    <li {!! Request::is('contact') ? 'class=active' : '' !!}><a href="{{url('contact')}}">Contáctenos</a></li>
                </ul>
        </div>
    </div>
</nav>