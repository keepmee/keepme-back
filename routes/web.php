<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Str;

Route::get('/test', function () {
    echo Str::plural('table');
});

Route::get('/register/confirm/{key}', 'Auth\\RegisterController@confirm');
Route::get('/password/reset/{token}', 'Auth\\PasswordController@verifyToken');

Route::get('/koop/applied/{id}/{token}', 'KoopApplicationController@applied');

