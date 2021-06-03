<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', 'Frontend\AppController@index')->name('index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout', 'Auth\LoginController@logout')->name('logout');


// Admin routes
Route::group([
    'prefix' => 'dashboard',
    'middleware' => ['auth', 'admin'],
    'as' => 'admin.'
], function () {
    Route::get('/', 'Backend\AppController@index')->name('dashboard');
});
