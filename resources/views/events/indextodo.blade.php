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
    @include('partials.slider',['message' => 'Próximamente grandes eventos',
                                'image' => 'img/events/entrepreneur.jpg'])

@endsection