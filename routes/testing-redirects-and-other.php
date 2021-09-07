<?php

use Illuminate\Support\Facades\Route;

Route::group([ 'prefix' => '/testing/errors/http/error-pages/' ], function()
{
    Route::view('401', "errors/401", [ 'page_title' => 'Testing - Unauthorized' ]);
    Route::view('403', "errors/403", [ 'page_title' => 'Testing - Forbidden' ]);
    Route::view('404', "errors/404", [ 'page_title' => 'Testing - Not Found' ]);
    Route::view('419', "errors/419", [ 'page_title' => 'Testing - Page Expired' ]);
    Route::view('429', "errors/429", [ 'page_title' => 'Testing - Too Many Requests' ]);
    Route::view('500', "errors/500", [ 'page_title' => 'Testing - Server Error' ]);
    Route::view('503', "errors/503", [ 'page_title' => 'Testing - Service Unavailable' ]);
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
