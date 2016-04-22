@extends('layouts.master')
@section('content')
    <div class="container">
        <section id="header" class="row">
            <div class="col-lg-12">
                <h1 class="page-header">@yield('title')
                    <small>@yield('subheading',null)</small>
                </h1>
                {!! Breadcrumbs::render() !!}
            </div>
        </section>
        @yield('container')
    </div>
@overwrite