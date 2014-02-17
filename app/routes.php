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

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('welcome', function() {
   return View::make('welcome')->with('name', 'santiaguito');
});

Route::get('formulario', function()
{
	return View::make('formulario');
});

Route::get('clave/{tag}', function($tag)
{
    return "tu clave $tag es muy debil";
});

Route::get('tonces/{usuario}', function($usuario)
{
    return "Tonces $usuario";
});

Route::get('edit/{id}', function($id)
{
    return "You are editing the user with the ID #$id";
})
->where('id', '[0-9]+');

Route::get('pasta-with-meatballs/{id_table}, {type}', array('as' => 'pasta_meatballs', 'uses' => 'ItalianController@pastaWithMeatBalls'))->where('id_table', '[0-9]+');




