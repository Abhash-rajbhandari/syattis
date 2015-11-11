<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', function () {
//        return ("Abhash");
    return view('welcome');
});

Route::get('func', 'trylaravel@index');

Route::get('about', 'PagesController@gettingAbout');

Route::get('contact', 'PagesController@contact');

Route::get('homePage', 'PagesController@homePage' );