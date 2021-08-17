<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'AdministrationController@index') -> middleware('auth') -> name('control-panel');

Route::group([ 'prefix' => '/client-projects/create' ], function()
{
    Route::get('/', 'ClientProjectsController@create') -> name('control-panel.client-projects.create');
    Route::post('/', 'ClientProjectsController@createPost') -> name('control-panel.client-projects.create');
});

Route::group([ 'prefix' => '/client-projects/edit' ], function()
{
    Route::get('/{id}', 'ClientProjectsController@edit') -> name('control-panel.client-projects.edit');
    Route::post('/', 'ClientProjectsController@editPost') -> name('control-panel.client-projects.edit');
});
