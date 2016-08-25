<?php

Route::post('contact', 'ContactController@postContact');
Route::resource('event', 'EventController', [
    'only' => [ 'index' ]
]);
//TODO...replace this use resource renaming method
Route::get('event/{slug}', ['as' => 'event.slug', 'uses' => 'EventController@showBySlug']);