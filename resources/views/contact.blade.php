@extends('layouts.breadcrumbs')
@section('title', 'Contáctenos')
@section('subheading', 'Subheading')
@section('container')
    <!-- Content Row -->
    <section class="row">
        <!-- Map Column -->
        <div class="col-md-8">
            <h3>Send us a Message</h3>
            <form name="sentMessage" id="contactForm" novalidate>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Nombre completo:</label>
                        <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Phone Number:</label>
                        <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Email Address:</label>
                        <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Mensaje:</label>
                        <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                    </div>
                </div>
                <div id="success"></div>
                <!-- For success/fail messages -->
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
        <!-- Contact Details Column -->
        <div class="col-md-4">
            <h3>Contact Details</h3>
            <p>
                3481 Melrose Place<br>Beverly Hills, CA 90210<br>
            </p>
            <p><i class="fa fa-phone"></i> 
                <abbr title="Phone">P</abbr>: (123) 456-7890</p>
            <p><i class="fa fa-envelope-o"></i> 
                <abbr title="Email">E</abbr>: <a href="mailto:name@example.com">name@example.com</a>
            </p>
            <p><i class="fa fa-clock-o"></i> 
                <abbr title="Hours">H</abbr>: Monday - Friday: 9:00 AM to 5:00 PM</p>
            <ul class="list-unstyled list-inline list-social-icons">
                <li>
                    <a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
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