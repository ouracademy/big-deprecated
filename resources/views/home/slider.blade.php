<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="{{asset('img/slider/business-world.jpg')}}" alt="...">
      <div class="carousel-caption">
        <h3>Bienvenido al mundo de las ideas</h3>
        <p>Ayudamos a convertir su idea en un negocio</p>
      </div>
    </div>
    <div class="item">
      <img src="{{asset('img/slider/conferences.jpg')}}" alt="...">
      <div class="carousel-caption">
        <h3>Grandes personas vienen de una gran educación</h3>
        <p>...</p>
      </div>
    </div>
    <div class="item">
      <img src="{{asset('img/slider/entrepreneur.jpg')}}" alt="...">
      <div class="carousel-caption">
        <h3>Creando la nueva generación de emprendedores</h3>
        <p>...</p>
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>