<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index') -> name('home');
Route::get('/services', 'HomeController@services') -> name('services');
Route::get('/about', 'HomeController@about') -> name('about');
Route::get('/terms-and-conditions') -> name('terms-and-conditions');
Route::get('/privacy-policy') -> name('privacy-policy');
Route::get('/cookie-policy') -> name('cookie-policy');

Route::get('/clients', 'BlogController@clients') -> name('clients');
Route::get('/clients/{blogId}', 'BlogController@clientProjects') -> name('clients.projects');


Route::group([ 'prefix' => '/testing/errors/http/error-pages/' ], function()
{
    Route::get('401', function() { abort(401); });
    Route::get('403', function() { abort(403); });
    Route::get('404', function() { abort(404); });
    Route::get('419', function() { abort(419); });
    Route::get('429', function() { abort(429); });
    Route::get('500', function() { abort(500); });
    Route::get('503', function() { abort(503); });
});


Route::group([ 'prefix' => 'work-with-us' ], function()
{
    Route::post('/', 'ContactController@workWithUsPost') -> name('post.work-with-us');
    Route::get('/success', 'ContactController@workWithUsSuccess') -> name('post.work-with-us.success');
    Route::get('/error', 'ContactController@workWithUsError') -> name('post.work-with-us.error');
});
Route::group([ 'prefix' => 'contact-us' ], function()
{
    Route::post('/', 'ContactController@contactUsPost') -> name('post.contact-us');
    Route::get('/success', 'ContactController@contactUsSuccess') -> name('post.contact-us.success');
    Route::get('/error', 'ContactController@contactUsError') -> name('post.contact-us.error');
});
