@extends('layouts.master')
@section('title', 'Inicio')
@section('head')
    {!! Html::style('css/home.css') !!}
@endsection
@section('content')
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
          <img src="{{asset('img/home/slider/lean-canvas-strategyzer.jpg')}}" alt="...">
          <div class="carousel-caption">
            <h3>Bienvenido al mundo de las ideas</h3>
            <p>Ayudamos a convertir su idea en un negocio</p>
          </div>
        </div>
        <div class="item">
          <img src="{{asset('img/home/slider/conference.jpg')}}" alt="...">
          <div class="carousel-caption">
            <h3>Grandes personas vienen de una gran educación</h3>
            <p>...</p>
          </div>
        </div>
        <div class="item">
          <img src="{{asset('img/home/slider/workshop.jpg')}}" alt="...">
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
    <section id="about-us">
        <div class="container">
          <div class="col-md-6">
              <h3 class="page-header">Nosotros</h3>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
              sed diam nonummy nibh euismod tincidunt ut laoreet dolore
              magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
              quis nostrud </p>
              <a href="{{url('about')}}" class="btn btn-primary">Ver más<i class="glyphicon glyphicon-arrow-right"></i></a>
          </div>
          <div class="col-md-6">
              <img class="img-responsive" src="{{asset('img/home/about-us.jpg')}}" width="400px" alt="Nosotros">    
          </div>
        </div>
    </section>
    <section class="gray" id="services">
        <div class="container">
          <div class="col-md-6">
              <img class="img-responsive" src="{{asset('img/home/startup.jpg')}}" width="400px" alt="Nuestros servicios">    
          </div>
          <div class="col-md-6">
              <h3 class="page-header">Nuestros servicios</h3>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
              sed diam nonummy nibh euismod tincidunt ut laoreet dolore
              magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
              quis nostrud </p>
              <a href="{{url('services')}}" class="btn btn-primary">Ver más<i class="glyphicon glyphicon-arrow-right"></i></a>
          </div>
        </div>
    </section>
    @include('partials.sponsors')
@endsection