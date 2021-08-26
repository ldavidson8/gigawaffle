<?php

use Illuminate\Support\Facades\Route;

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
//     $target = '/home/wqbk9bge58wq/laravel-swapmyenergy-zn01/public';
//     $shortcut = '/home/wqbk9bge58wq/public_html/www_swapmyenergy_test';
//     symlink($target, $shortcut);
// });


//---------------------------------
//-----  Permanent Redirects  -----
//---------------------------------
Route::get('/blog/2021/08/17/waffle-corner-what-is-seo', function() { return redirect('/blog/512/', 301); });
Route::get('/blog/2021/08/09/waffle-fundamentals-what-is-copywriting', function() { return redirect('blog/513', 301); });
Route::get('/blog/2021/08/08/welcome-to-the-waffle-corner', function() { return redirect('blog/514', 301); });


//--------------------------------
//-----  Sitemap Generation  -----
//--------------------------------
Route::get('/generation/create/sitemap.xml', 'AutoGenerateController@sitemap');

Route::domain('http://www.gigawaffle.co.uk') -> group(function()
{
    Route::get('/clients/{projectId}', 'ClientsController@clientProjects') -> name('live-website.clients.projects');
    Route::get('/blog/{blogId}', 'BlogController@blogPost') -> name('live-website.blog.blog-post');
});
