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
    Route::post('/register', 'Auth\\RegisterController@register'); // Register
    Route::post('/login', 'Auth\\LoginController@login'); // Login
    Route::post('/logout', 'AuthController@logout'); // Logout

    Route::post('/password/forgot', 'Auth\\PasswordController@forgot'); // Password forgot
    Route::post('/password/reset', 'Auth\\PasswordController@reset'); // Password forgot
    Route::put('/password/users/{id}', 'Auth\\PasswordController@update'); // Password forgot

    Route::get('/logged', 'AuthController@logged'); // Check if current user is logged
    Route::get('/nannied', 'AuthController@nannied'); // Check if current user is logged

    Route::post('/mail/contact', 'MailController@contact'); // Contact us

    Route::get('/test', function (Request $request) {
//        var_dump(\Carbon\Carbon::now());
        $user = \App\User::first();
        $collection = collect($user->notifications);
//        var_dump($user->notifications->items);
        return ($collection->filter(function ($value, $key) use ($user) {
            var_dump($value->data['parent']['id']);
            return $value->type === "App\\Notifications\\KoopApplicationNotification";
        }));/*view('pages.emails.koop.applied');*/
    })->name('test');


    Route::middleware(['jwt.auth'])->group(function () {

        Route::get('/users/current', 'UserController@getCurrentUser'); // Get current user
        Route::put('/users/{id}', 'UserController@update'); // Update current user

        Route::get('/addresses/current', 'AddressController@getCurrentAddress'); // Get current address
        Route::get('/address/current/location', 'AddressController@getUserLocation'); // Get user location
        Route::put('/addresses/{id}', 'AddressController@update'); // Update address

        Route::get('/children/current', 'ChildrenController@getCurrentChildren'); // Get current user
        Route::post('/children', 'ChildrenController@store'); // Store child
        Route::put('/children/{id}', 'ChildrenController@update'); // Update child
        Route::delete('/children/{id}', 'ChildrenController@delete'); // Update child

        Route::get('/koops/mine', 'KoopController@findAllMine'); // Get all user koops
        Route::get('/koops/available', 'KoopController@findAllAvailable'); // Get all available koops
//        Route::get('/koop/available', 'KoopController@findAllAvailable'); // Get all koops
        Route::post('/koop', 'KoopController@store'); // Store koops
        Route::put('/koop/validate/{id}', 'KoopController@apply'); // Store koops

        Route::post('/koop/apply/{id}', 'KoopApplicationController@apply'); // Apply to koops

        Route::get('/notifications', 'NotificationController@all');

        Route::get('/diplomas/mine', 'DiplomaController@mine');
        Route::post('/diploma', 'DiplomaController@store');

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
