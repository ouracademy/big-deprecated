@extends('layouts.breadcrumbs')
@section('title', 'Nosotros')
@section('subheading', 'Un equipo dedicado a formar grandes personas')
@section('head')
    {!! Html::style('css/about.css') !!}
@endsection
@section('container')
    <section class="row" id="intro">
        <div class="col-md-6">
            <img class="img-responsive" src="{{asset('img/team.jpg')}}" alt="">
        </div>
        <div class="col-md-6">
            <h2>Nosotros - <abbr title="Business Ideas Group">BIG</abbr></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, magni, aperiam vitae illum voluptatum aut sequi impedit non velit ab ea pariatur sint quidem corporis eveniet. Odit, temporibus reprehenderit dolorum!</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti eum ratione ex ea praesentium quibusdam? Aut, in eum facere corrupti necessitatibus perspiciatis quis?</p>
        </div>
    </section>

    <section class="row" id="team">
        <div class="col-lg-12">
            <h3 class="page-header">Nuestro equipo</h3>
        </div>
        <div class="col-md-4 text-center">
            <div class="thumbnail">
                <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                <div class="caption">
                    <h3>Arthur Mauricio<br>
                        <small>Cofundador</small>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                    <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <div class="thumbnail">
                <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                <div class="caption">
                    <h3>André Mauricio<br>
                        <small>CEO - Cofundador</small>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                    <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <div class="thumbnail">
                <img class="img-responsive" src="http://placehold.it/750x450" alt="">
                <div class="caption">
                    <h3>Amiga de André<br>
                        <small>Miembro del equipo</small>
                    </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste saepe et quisquam nesciunt maxime.</p>
                    <ul class="list-inline">
                        <li><a href="#"><i class="fa fa-2x fa-facebook-square"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-2x fa-linkedin-square"></i></a>
                        </li>
                        <li><a href="#"><i class="fa fa-2x fa-twitter-square"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    @include('partials.sponsors')
@endsection