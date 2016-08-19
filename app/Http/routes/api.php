<?php

Route::post('contact', 'ContactController@postContact');
Route::resource('event', 'EventController', [
    'only' => [ 'index' ]
]);