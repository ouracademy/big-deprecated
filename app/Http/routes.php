<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@home');
Route::get('home', ['as' => 'home', 'uses' => 'HomeController@home']);
Route::get('about', ['as' => 'about', 'uses' => 'HomeController@about']);
Route::get('services', ['as' => 'services', 'uses' => 'HomeController@services']);
Route::get('contact', ['as' => 'contact', 'uses' => 'HomeController@contact']);
Route::get('events', ['as' => 'events', 'uses' => 'EventController@index']);
Route::get('event/{event}', ['as' => 'event', 'uses' => 'EventController@show']);

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

Route::group(['middleware' => ['web']], function () {
    //
});
