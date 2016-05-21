@extends('layouts.master')
@section('title', 'Nosotros')
@section('head')
    {!! Html::style('css/absolute-background.css') !!}
    {!! Html::style('css/about.css') !!}
@endsection
@section('content')
    @include('partials.slider',['message' => 'Un equipo dedicado a formar grandes personas',
                                'image' => 'img/about/team.jpg'])
    
    <section class="container">
        <div class="col-lg-12">
            {!! Breadcrumbs::render() !!}
        </div>
    </section>
    <section id="intro">
        <div class="container">
            <div class="col-md-4">
                <h2 class="page-header">Nosotros</h2>
                <p>Business Ideas Group (BIG) es una empresa peruana que fomenta la cultura
                emprendedora en el país a través de talleres, seminarios,
                cursos, conferencias y consultorías en temas como:</p>
                <ul>
                	<li>Comercio Exterior</li>
                	<li>Emprendimiento</li>
                	<li>STARTUP</li>
                	<li>Gestión Empresarial</li>
                	<li>Innovación y Tecnología</li>
                	<li>Marketing Digital</li>
                	<li>TI</li>
                </ul>
            </div>
            <div class="col-md-8">
                <h2 class="page-header">¿Por qué nosotros?</h2>
                <div class="media">
					<div class="media-left">
						<div class="">
							<i class="glyphicon glyphicon-star"></i>
						</div>
					</div>
					<div class="media-body">
						<h4 class="media-heading">Servicio Premium</h4>
						<p>Brindamos educación empresarial de primer nivel a través de ponencias magistrales.</p>
					</div>
				</div>
				<div class="media">
					<div class="media-left">
						<div class="">
							<i class="glyphicon glyphicon-education"></i>
						</div>
					</div>
					<div class="media-body">
						<h4 class="media-heading">Diversidad de Ponencias</h4>
						<p>Brindamos una gran variedad  de ponencias que abarcan desde innovación hasta TI</p>
					</div>
				</div>
				<div class="media">
					<div class="media-left">
						<div class="">
							<i class="glyphicon glyphicon-user"></i>
						</div>
					</div>
					<div class="media-body">
						<h4 class="media-heading">Equipo profesional</h4>
						<p>Contamos con un Staff de gran experiencia que laboran en prestigiosas entidades públicas y privadas</p>
					</div>
				</div>
            </div>
        </div>
    </section>
    
    @include('partials.sponsors')
@endsection