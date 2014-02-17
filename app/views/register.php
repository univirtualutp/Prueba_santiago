<?php
if ($validator->passes()) {
    $user = new User;
    $user->firstname = Input::get('firstname');
    $user->lastname = Input::get('lastname');
    $user->email = Input::get('email');
    $user->password = Hash::make(Input::get('password'));
    $user->save();
 
    Mail::send('users.mails.welcome', array('firstname'=>Input::get('firstname')), function($message){
        $message->to(Input::get('email'), Input::get('firstname').' '.Input::get('lastname'))->subject('Welcome to the Laravel 4 Auth App!');
    });
 
    return Redirect::to('users/login')->with('message', 'Thanks for registering!');
} else {
    return Redirect::to('users/register')->with('message', 'The following errors occurred')->withErrors($validator)->withInput();
} 
?>