<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

Route::get('/', [ HomeController::class, 'index' ]) -> name('home');
Route::get('/clients', [ HomeController::class, 'clients' ]) -> name('clients');
Route::get('/services', [ HomeController::class, 'services' ]) -> name('services');
Route::get('/about', [ HomeController::class, 'about' ]) -> name('about');

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
