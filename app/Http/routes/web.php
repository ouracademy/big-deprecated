<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::get('/',  function() {
  return view("index");
});

// Route::auth();
// Route::get('event/{slug}', ['as' => 'event.slug', 'uses' => 'EventController@showBySlug']);
// Route::resource('participant', 'ParticipantController');

Route::get('{any}', function ($any) {
  return view("index");
})->where('any', '.*');