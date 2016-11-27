<?php

Route::post('contact', 'ContactController@postContact');

//TODO...replace this use resource renaming method
Route::get('event/{slug}', ['as' => 'event.slug', 'uses' => 'EventController@showBySlug']);

Route::get('event/{id}/information-request', ['as' => 'event.participant', 'uses' => 'InformationRequest\ListController@index']);
Route::post('event/{id}/information-request', ['as' => 'event.participant', 'uses' => 'RegisterInformationRequestController@index']);

Route::resource('event', 'EventController', [
    'only' => [ 'index' ]
]);