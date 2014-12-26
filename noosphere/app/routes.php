<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', array('uses' => 'HomeController@accueil', 'as' => 'accueil'));

 
Route::model('cat', 'Categorie');
Route::get('cat/{cat}', 'HomeController@categorie');
 
Route::model('art', 'Article');
Route::get('art/{cat_id}/{art}', 'HomeController@article');
 
Route::post('find', 'HomeController@find');
Route::post('comment', 'HomeController@comment'); 

Route::controller('auth', 'AuthController');

Route::controller('remind', 'RemindersController');