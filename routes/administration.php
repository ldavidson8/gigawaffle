<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'AdministrationController@index') -> middleware('auth') -> name('control-panel');

Route::group([ 'prefix' => '/client-projects' ], function()
{
    Route::get('/', 'ClientProjectsController@index') -> middleware('auth') -> name('control-panel.client-projects');
    Route::group([ 'prefix' => '/create' ], function()
    {
        Route::get('/', 'ClientProjectsController@create') -> middleware('auth') -> name('control-panel.client-projects.create');
        Route::post('/', 'ClientProjectsController@createPost') -> middleware('auth') -> name('control-panel.client-projects.create');
    });

    Route::group([ 'prefix' => '/edit' ], function()
    {
        Route::get('/{id}', 'ClientProjectsController@edit') -> middleware('auth') -> name('control-panel.client-projects.edit');
        Route::post('/', 'ClientProjectsController@editPost') -> middleware('auth') -> name('control-panel.client-projects.edit');
    });
});

Route::group([ 'prefix' => '/blog-post' ], function()
{
    Route::get('/', 'BlogPostController@index') -> middleware('auth') -> name('control-panel.blog-post');
    Route::group([ 'prefix' => '/create' ], function()
    {
        Route::get('/', 'BlogPostController@create') -> middleware('auth') -> name('control-panel.blog-post.create');
        Route::post('/', 'BlogPostController@createPost') -> middleware('auth') -> name('control-panel.blog-post.create');
    });

    Route::group([ 'prefix' => '/edit' ], function()
    {
        Route::get('/{id}', 'BlogPostController@edit') -> middleware('auth') -> name('control-panel.blog-post.edit');
        Route::post('/', 'BlogPostController@editPost') -> middleware('auth') -> name('control-panel.blog-post.edit');
    });
});

Route::group([ 'prefix' => '/blog-category' ], function()
{
    Route::get('/', 'BlogCategoryController@index') -> middleware('auth') -> name('control-panel.blog-category');
    Route::group([ 'prefix' => '/create' ], function()
    {
        Route::get('/', 'BlogCategoryController@create') -> middleware('auth') -> name('control-panel.blog-category.create');
        Route::post('/', 'BlogCategoryController@createPost') -> middleware('auth') -> name('control-panel.blog-category.create');
    });

    Route::group([ 'prefix' => '/edit' ], function()
    {
        Route::get('/{id}', 'BlogCategoryController@edit') -> middleware('auth') -> name('control-panel.blog-category.edit');
        Route::post('/', 'BlogCategoryController@editPost') -> middleware('auth') -> name('control-panel.blog-category.edit');
    });
});
