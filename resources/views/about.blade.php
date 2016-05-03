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
            <div class="col-md-4">
                <h2>Nosotros</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, magni, aperiam vitae illum voluptatum aut sequi impedit non velit ab ea pariatur sint quidem corporis eveniet. Odit, temporibus reprehenderit dolorum!</p>
            </div>
            <div class="col-md-8">
                <h2>¿Por qué nosotros?</h2>
                <div class="media">
					<div class="media-left">
						<div class="">
							<i class="fa fa-check "></i>
						</div>
					</div>
					<div class="media-body">
						<h4 class="media-heading">Experiencia</h4>
						<p>Somos una empresa dedicada al comercio exterior con 5 años de experiencia en este rubro.</p>
					</div>
				</div>
				<div class="media">
					<div class="media-left">
						<div class="">
							<i class="fa fa-check "></i>
						</div>
					</div>
					<div class="media-body">
						<h4 class="media-heading">Experiencia</h4>
						<p>Somos una empresa dedicada al comercio exterior con 5 años de experiencia en este rubro.</p>
					</div>
				</div>
				<div class="media">
					<div class="media-left">
						<div class="">
							<i class="fa fa-check "></i>
						</div>
					</div>
					<div class="media-body">
						<h4 class="media-heading">Experiencia</h4>
						<p>Somos una empresa dedicada al comercio exterior con 5 años de experiencia en este rubro.</p>
					</div>
				</div>
            </div>
        </div>
    </section>
    
    @include('partials.sponsors')
@endsection