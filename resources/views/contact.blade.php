@extends('layouts.master')
@section('title', 'Contáctenos')
@section('head')
    {!! Html::style('css/contact.css') !!}
    {!! Html::style('css/absolute-background.css') !!}
@endsection
@section('content')
    <header class="jumbotron absolute-background image-background" 
        style="background-image: url('http://big-marthur.c9users.io/public/img/utiles/business-world.jpg')">
        <div class="background black-background"></div>
        <div class="content text-center">
            <div class="container">
                <h1>Contáctenos</h1>
                <p>Conéctate con nosotros</p>
            </div>
        </div>
    </header>
    <section class="container">
        <div class="col-lg-12">
            {!! Breadcrumbs::render() !!}
        </div>
    </section>
    <section>
        <div class="container">
            <div class="col-md-8">
                <h3>Envíenos su mensaje</h3>
                <form name="sentMessage" id="contactForm">
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Nombre completo:</label>
                            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Dirección de email:</label>
                            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Mensaje:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div><!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Enviar mensaje</button>
                </form>
            </div>
            <div class="col-md-4 contact-details">
                <h3>Detalles de contacto</h3>
                <ul class="list-unstyled">
                    <li>
                        <i class="fa fa-map-marker"></i>Calle Ramón Cerdeira #175, dep. 301, San Borja(Perú, Lima 36)
                    </li>
                    <li>
                        <i class="fa fa-phone"></i>(01) 226-5452</li>
                    <li>
                        <i class="fa fa-envelope-o"></i>
                        <a href="mailto:informes@businessideasgroup.com.pe">
                            informes@businessideasgroup.com.pe</a>
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