<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    App\User::create([
        'email' => uniqid() . '@example.com',
        'name' => 'Test User',
        'password' => 'secret'
    ]);

    return response()->json(App\User::all());

    // phpinfo();
});
