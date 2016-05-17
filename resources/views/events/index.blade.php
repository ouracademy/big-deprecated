@extends('layouts.master')
@section('title', 'Eventos')
@section('head')
    {!! Html::style('css/absolute-background.css') !!}
    <style type="text/css">
        .jumbotron{
            margin-bottom:0px;
        }
    </style>
@endsection
@section('content')
    <header class="jumbotron absolute-background image-background" 
        style="background-image: url('http://big-marthur.c9users.io/public/img/events/entrepreneur.jpg')">
        <div class="background black-background"></div>
        <div class="content text-center">
            <div class="container">
                <h1>Eventos</h1>
                <p>Próximamente grandes eventos</p>
            </div>
        </div>
    </header>
@endsection