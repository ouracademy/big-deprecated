@extends('layouts.master')
@section('title', 'Inicio')
@section('head')
    {!! Html::style('css/home.css') !!}
@endsection
@section('content')
  @include('home.slider')
    <section class="row" id="about-us">
        <div class="col-md-6">
            <h2 class="page-header">Nosotros</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
            sed diam nonummy nibh euismod tincidunt ut laoreet dolore
            magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
            quis nostrud </p>
            <a href="{{url('services')}}" class="btn btn-primary">Ver más<i class="glyphicon glyphicon-arrow-right"></i></a>
        </div>
        <div class="col-md-6">
            <img class="img-responsive" src="http://www.vantageabt.com/images/os.jpg" height="320px" width="50%" alt="">    
        </div>
    </section>
    <section class="row gray" id="services">
        <div class="col-md-6">
            <img class="img-responsive" src="https://static.wixstatic.com/media/5da6025daca645e7baee50a929fe5b82.jpg/v1/fill/w_344,h_229,al_c,q_80,usm_0.66_1.00_0.01/5da6025daca645e7baee50a929fe5b82.jpg" height="320px" width="50%" alt="">    
        </div>
        <div class="col-md-6">
            <h2 class="page-header">Nuestros servicios</h2>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
            sed diam nonummy nibh euismod tincidunt ut laoreet dolore
            magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
            quis nostrud </p>
            <a href="{{url('services')}}" class="btn btn-primary">Ver más<i class="glyphicon glyphicon-arrow-right"></i></a>
        </div>
    </section>
    <section class="row" id="sponsors">
        <div class="col-lg-12">
            <h2 class="page-header">Nuestros patrocinadores</h2>
        </div>
        <div class="sponsor col-md-2 col-sm-4 col-xs-6">
            <img class="img-responsive" src="http://placehold.it/500x300" alt="">
        </div>
        <div class="sponsor col-md-2 col-sm-4 col-xs-6">
            <img class="img-responsive" src="http://placehold.it/500x300" alt="">
        </div>
        <div class="sponsor col-md-2 col-sm-4 col-xs-6">
            <img class="img-responsive" src="http://placehold.it/500x300" alt="">
        </div>
    </section>
    
    
    <!--<div class="col-md-offset-1 col-md-4 text-center">
                <div class="thumbnail service">
                    <img class="img-responsive" src="http://ca-helpline.com/wp-content/uploads/2015/11/classes-icon.png" height="320px" width="50%" alt="">
                    <div class="caption">
                        <h3>Talleres y seminarios</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                        <a href="#" class="btn btn-primary" role="button">Ver más<i class="glyphicon glyphicon-arrow-right"></i></a>
                    </div>
                </div>
            </div>-->
@endsection