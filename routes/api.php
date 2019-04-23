<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::middleware(['cors'])->group(function () {

    /**
     * Routes authentification
     */
    Route::post('/register', 'AuthController@register'); // Register
    Route::post('/login', 'AuthController@login'); // Login
    Route::post('/logout', 'AuthController@logout'); // Logout

    Route::get('/test', function (Request $request) {
        return response()->json('response : ok');
    })->name('test');


    Route::middleware(['jwt.auth'])->group(function () {
        /**
         * Routes génériques
         */
        Route::get('/{table}', 'ApiController@findAll'); // Get all datas
        Route::get('/{table}/{field}/{value}', 'ApiController@findOneBy'); // Get one data by field=value
        Route::get('/{table}/{id}', 'ApiController@findOneById'); // Get one data by id
        Route::post('/{table}', 'ApiController@store'); // Store data
        Route::put('/{table}/{id}', 'ApiController@update'); // Update data
        Route::delete('/{table}/{id}', 'ApiController@delete'); // Delete data
    });
});
