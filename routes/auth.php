<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/

Route::get('/login', 'AuthenticatedSessionController@create') -> middleware('guest') -> name('login');
Route::post('/login', 'AuthenticatedSessionController@store') -> middleware('guest') -> name('login');
Route::view('/login/success', 'auth.login-success') -> middleware('auth') -> name('login-success');

Route::view('/logout-confirm', 'auth.logout-confirm') -> middleware('auth') -> name('logout-confirm');
Route::get('/logout', 'AuthenticatedSessionController@destroy') -> middleware('auth') -> name('logout');
