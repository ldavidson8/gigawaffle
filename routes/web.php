<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index') -> name('home');
Route::get('/services', 'HomeController@services') -> name('services');
Route::get('/about', 'HomeController@about') -> name('about');
Route::get('/terms-and-conditions', 'HomeController@termsAndConditions') -> name('terms-and-conditions');
Route::get('/privacy-policy', 'HomeController@privacyPolicy') -> name('privacy-policy');
Route::get('/cookie-policy', 'HomeController@cookiePolicy') -> name('cookie-policy');
Route::get('/sitemap', 'HomeController@Sitemap') -> name('sitemap');

Route::get('/clients', 'ClientsController@clients') -> name('clients');
Route::get('/clients/{projectId}', 'ClientsController@clientProjects') -> name('clients.projects');


Route::group([ 'prefix' => 'work-with-us' ], function()
{
    Route::post('/', 'ContactController@workWithUsPost') -> name('post.work-with-us');
    Route::get('/success', 'ContactController@workWithUsSuccess') -> name('post.work-with-us.success');
    Route::get('/error', 'ContactController@workWithUsError') -> name('post.work-with-us.error');
});
Route::group([ 'prefix' => 'contact-us' ], function()
{
    Route::post('/', 'ContactController@contactUsPost') -> name('post.contact-us');
    Route::get('/success/{ticket}', 'ContactController@contactUsSuccess') -> name('post.contact-us.success');
    Route::get('/error', 'ContactController@contactUsError') -> name('post.contact-us.error');
});
Route::group([ 'prefix' => 'service-selection' ], function()
{
    Route::get('/', 'HomeController@picknMix') -> name('service-selection');
    Route::post('/', 'ServiceSelectionController@serviceSelectionPost') -> name('post.service-selection');
    Route::get('/success/{ticket}', 'ServiceSelectionController@serviceSelectionSuccess') -> name('post.service-selection.success');
    Route::get('/error', 'ServiceSelectionController@serviceSelectionError') -> name('post.service-selection.error');
});


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

// Route::get('symbolic-link', function()
// {
//     $target = '/home/wqbk9bge58wq/laravel-swapmyenergy/public/css';
//     $shortcut = '/home/wqbk9bge58wq/public_html/www_swapmyenergy/css2';
//     symlink($target, $shortcut);
//     $target = '/home/wqbk9bge58wq/laravel-swapmyenergy/public/fonts';
//     $shortcut = '/home/wqbk9bge58wq/public_html/www_swapmyenergy/fonts2';
//     // symlink($target, $shortcut);
//     $target = '/home/wqbk9bge58wq/laravel-swapmyenergy/public/img';
//     $shortcut = '/home/wqbk9bge58wq/public_html/www_swapmyenergy/img2';
//     symlink($target, $shortcut);
//     $target = '/home/wqbk9bge58wq/laravel-swapmyenergy/public/js';
//     $shortcut = '/home/wqbk9bge58wq/public_html/www_swapmyenergy/js2';
//     symlink($target, $shortcut);
//     $target = '/home/wqbk9bge58wq/laravel-swapmyenergy/public/media';
//     $shortcut = '/home/wqbk9bge58wq/public_html/www_swapmyenergy/media2';
//     symlink($target, $shortcut);
//     $target = '/home/wqbk9bge58wq/laravel-swapmyenergy/public/storage';
//     $shortcut = '/home/wqbk9bge58wq/public_html/www_swapmyenergy/storage2';
//     // symlink($target, $shortcut);
// });
