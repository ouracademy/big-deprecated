@extends('layouts.master')
@section('title', 'Nosotros')
@section('head')
    {!! Html::style('css/absolute-background.css') !!}
@endsection
@section('content')
    <header class="jumbotron absolute-background image-background" 
        style="background-image: url('http://big-marthur.c9users.io/public/img/about/team.jpg')">
        <div class="background black-background"></div>
        <div class="content text-center">
            <div class="container">
                <h1>Nosotros</h1>
                <p>Un equipo dedicado a formar grandes personas</p>
            </div>
        </div>
    </header>
    <section class="container">
        <div class="col-lg-12">
            {!! Breadcrumbs::render() !!}
        </div>
    </section>
    <section id="intro">
        <div class="container">
            <div class="col-md-6">
                <img class="img-responsive" src="{{asset('img/about/workshop.jpg')}}" alt="">
            </div>
            <div class="col-md-6">
                <h2 class="page-header">BIG: Business Ideas Group</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, magni, aperiam vitae illum voluptatum aut sequi impedit non velit ab ea pariatur sint quidem corporis eveniet. Odit, temporibus reprehenderit dolorum!</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti eum ratione ex ea praesentium quibusdam? Aut, in eum facere corrupti necessitatibus perspiciatis quis?</p>
            </div>
        </div>
    </section>
    
    @include('partials.sponsors')
@endsection