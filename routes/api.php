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

        Route::get('/users/current', 'UserController@getCurrentUser'); // Get current user
        Route::put('/users/{id}', 'UserController@update'); // Update current user

        Route::get('/addresses/current', 'AddressController@getCurrentAddress'); // Get current address
        Route::put('/addresses/{id}', 'AddressController@update'); // Update address

        Route::get('/children/current', 'ChildrenController@getCurrentChildren'); // Get current user

        Route::get('/koops/mine', 'PostController@getAllMine'); // Get current user
        Route::get('/koop/available', 'PostController@findAllAvailable'); // Get all koops
        Route::get('/koop/available', 'PostController@findAllAvailable'); // Get all koops
        Route::post('/koop', 'PostController@store'); // Store koops
        Route::put('/koop/validate/{id}', 'PostController@apply'); // Store koops

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
