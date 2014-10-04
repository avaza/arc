<?php

/*
 * Landing Page
 */
Route::get('/',[
    'as' => 'home',
    'uses' =>'PagesController@home'
]);

Route::get('login', [
    'as' => 'login',
    'uses' => 'SessionsController@create'
]);

Route::get('logout', [
    'as' => 'logout',
    'uses' => 'SessionsController@destroy'
]);

/*
 * Registration
 */
Route::get('register',[
    'as' => 'register_path',
    'uses' => 'RegistrationController@create'
]);

Route::post('register',[
    'as' => 'register_path',
    'uses' => 'RegistrationController@store'
]);


/*Route::group(array('before' => 'auth'), function()
{*/
    Route::get('invitations/create/{for?}', 'InvitationsController@create');
    Route::resource('invitations', 'InvitationsController', ['only' => ['store']]);
    Route::resource('users', 'UsersController');
    Route::resource('sessions', 'SessionsController', ['only' => ['create', 'store', 'destroy']]);
    Route::resource('resources', 'ResourcesController');
    Route::resource('clients', 'ClientsController');
    Route::resource('divisions', 'DivisionsController');
    Route::resource('agencies', 'AgenciesController');
    Route::resource('contracts', 'ContractsController');
    Route::resource('languages', 'LanguagesController');
//});