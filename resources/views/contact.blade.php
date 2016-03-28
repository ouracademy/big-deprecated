@extends('layouts.breadcrumbs')
@section('title', 'Contáctenos')
@section('subheading', 'Conéctate con nosotros')
@section('container')
    <section class="row">
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
        <div class="col-md-4">
            <h3>Detalles de contacto</h3>
            <p>
                Calle Ramón Cerdeira #175, dep. 301, San Borja(Perú, Lima 36)
            </p>
            <p>
                <i class="fa fa-phone"></i>(01) 226-5452</p>
            <p>
                <i class="fa fa-envelope-o"></i>
                <a href="mailto:informes@businessideasgroup.com.pe">
                    informes@businessideasgroup.com.pe</a>
            </p>
            <p><i class="fa fa-clock-o"></i>Lunes - Viernes: 9:00 AM a 10:00 PM</p>
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
        </div>
    </section>
@endsection