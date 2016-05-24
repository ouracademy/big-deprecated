@extends('layouts.master')
@section('title', 'Contáctenos')
@section('head')
    {!! Html::style('css/contact.css') !!}
    {!! Html::style('css/absolute-background.css') !!}
@endsection
@section('content')
    @include('partials.slider',['message' => 'Conéctate con nosotros',
                                'image' => 'img/contact/business-world.jpg'])
    <section class="container">
        <div class="col-lg-12">
            {!! Breadcrumbs::render() !!}
        </div>
    </section>
    <section>
        <div class="container">
            <div class="col-md-8">
                
                @include('partials.status')
				@include('partials.errors')
                
                <h2 class="page-header">Envíenos su mensaje</h2>
                {!! Form::open(['route' => 'contact', 'name' => 'sentMessage']) !!}
                    <div class="control-group form-group">
                        <div class="controls">
                            {!! Form::label('name', 'Nombre completo') !!}
                            {!! Form::text('name', null, ['required', 'class' =>'form-control']) !!}
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            {!! Form::label('email', 'Dirección de email:') !!}
                            {!! Form::email('email', null, ['required', 'class' =>'form-control']) !!}
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            {!! Form::label('message', 'Mensaje:') !!}
                            {!! Form::textarea('message', null, ['required', 'class' =>'form-control', 'rows'=>'10', 'cols'=>'100', 'maxlength'=>'999']) !!}
                        </div>
                    </div>
                    <div id="success"></div><!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Enviar mensaje</button>
                {!! Form::close() !!}
            </div>
            <div class="col-md-4 contact-details">
                <h2 class="page-header">Detalles de contacto</h2>
                <ul class="list-unstyled">
                    <li>
                        <i class="fa fa-map-marker"></i>
                        {{ $BIG->getLocation() }}
                    </li>
                    <li>
                        <i class="fa fa-phone"></i>(01) 226-5452</li>
                    <li>
                        <i class="fa fa-envelope-o"></i>
                        <a href="mailto:{{ $BIG->getEmail() }}">
                            {{ $BIG->getEmail() }}</a>
                    </li>
                    <li><i class="fa fa-clock-o"></i>Lunes - Viernes: 9:00 AM a 10:00 PM</li>
                    <ul class="list-unstyled list-inline list-social-icons">
                        <li>
                            <a href="https://www.facebook.com/businessideasgroupperu/">
                                <i class="fa fa-facebook-square fa-2x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter-square fa-2x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
                        </li>
                    </ul>
                </ul>
            </div>
        </div>
    </section>
@endsection