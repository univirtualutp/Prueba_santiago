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

Route::resource('admin/users', 'Admin_UsersController');

Route::get('contact', function() {

    return View::make('contact');

});

Route::post('contact', function() {

    $fromEmail = Input::get('email');
    $fromName = Input::get('name');
    $subject = Input::get('subject');
    $data = Input::get('message');

    $toEmail = 'manager@company.com';
    $toName = 'Company Manager';

    Mail::send('emails.contact', $data, function($message) use ($toEmail, $toName, $fromEmail, $fromName, $subject)
    {
        $message->to($toEmail, $toName);
        $message->from($fromEmail, $fromName);
        $message->subject($subject);
    });

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
});
//->where('id', '[0-9]+');

/*Route::get('pasta-with-meatballs/{id_table}, {type}', array('as' => 'pasta_meatballs', 'uses' => 'ItalianController@pastaWithMeatBalls'))->where('id_table', '[0-9]+');

Route::get('plantilla/{name}', function ($name) {
   $name = ucwords(str_replace('-', ' ', $name));
   return View::make('plantilla')->with('name', $name); 
});*/