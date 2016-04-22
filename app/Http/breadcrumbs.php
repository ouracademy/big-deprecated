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
Breadcrumbs::register('events', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Eventos', route('events'));
});

// Inicio > Eventos > [Evento]
Breadcrumbs::register('event', function($breadcrumbs, $event)
{
    $breadcrumbs->parent('events');
    $breadcrumbs->push($event->getName(), route('event', $event->getSlug()));
});


// Inicio > Contáctenos
Breadcrumbs::register('contact', function($breadcrumbs)
{
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Contáctenos', route('contact'));
});