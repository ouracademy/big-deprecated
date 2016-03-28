@extends('layouts.master')
@section('title', 'Inicio')
@section('head')
    {!! Html::style('css/home.css') !!}
@endsection
@section('content')
  @include('home.slider')
    <div class="container">
        <section id="services">
            <div class="row">
                <div class="col-md-6 service">
                    <div class="thumbnail">
                        <img alt="cursos" src="img/courses.png" height="320px" width="70%"/>
                        <div class="caption">
                            <h3>Cursos</h3>
                            <p>Importamos productos de Estados Unidos y diferentes paises de Asia.</p>
                            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 service">
                    <div class="thumbnail">
                        <img alt="talleres y seminarios" src="img/workshop.png" height="320px" width="70%"/>
                        <div class="caption">
                            <h3>Talleres y seminarios</h3>
                            <p>Importamos productos de Estados Unidos y diferentes paises de Asia.</p>
                            <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection