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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();
Route::get('/home', 'HomeController@index');

Route::get('about', ['as' => 'about', 'uses' => 'HomeController@about']);
Route::get('services', ['as' => 'services', 'uses' => 'HomeController@services']);
Route::get('event/{slug}', ['as' => 'event.slug', 'uses' => 'EventController@showBySlug']);
Route::resource('event', 'EventController');
Route::get('contact', ['as' => 'contact', 'uses' => 'ContactController@getContact']);
Route::post('contact', 'ContactController@postContact');
