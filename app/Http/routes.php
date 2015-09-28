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
Route::group(['middleware' => 'guest'], function() {
Route::get('/', function () {
    return view('welcome');
});
});
Route::get('search', 'RoomController@search');

Route::model('accommodation', '\MyCompany\Accommodation\Accommodation');
Route::group(['middleware' => ['auth']], function() {
    Route::resource('user', 'User\UserController');
    Route::resource('accommodation', 'AccommodationsController');
    Route::resource('accommodations.rooms', 'AccommodationsRoomsController');
});

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
