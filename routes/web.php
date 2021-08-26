<?php

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

Route::group([ 'prefix' => 'blog' ], function()
{
    Route::get('/', 'BlogController@index') -> name('blog');
    Route::get('/{blogId}', 'BlogController@blogPost') -> name('blog.blog-post');
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
