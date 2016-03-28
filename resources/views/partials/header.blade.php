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
                <a class="navbar-brand" href="{{url('home')}}">
                    <img src="{{asset('img/logo.jpg')}}"/>
                </a>
            </abbr>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="{{url('home')}}">Inicio</a></li>
                <li><a href="{{url('about')}}">Nosotros</a></li>
                <li><a href="{{url('events')}}">Eventos</a></li>
                <li><a href="{{url('contact')}}">Contáctenos</a></li>
            </ul>
        </div>
    </div>
</nav>