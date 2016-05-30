<?php

// Inicio
Breadcrumbs::register('home', function($breadcrumbs)
{
    $breadcrumbs->push('Inicio', route('home'));
});

// Inicio > Nosotros
Breadcrumbs::register('about', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Nosotros', route('about'));
});

// Inicio > Eventos
Breadcrumbs::register('event.index', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Eventos', route('event.index'));
});

// Inicio > Eventos > [Evento]
Breadcrumbs::register('event.slug', function($breadcrumbs, $event)
{
    $breadcrumbs->parent('event.index');
    $breadcrumbs->push($event->getName(), route('event.slug', $event->getSlug()));
});


// Inicio > Contáctenos
Breadcrumbs::register('contact', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Contáctenos', route('contact'));
});