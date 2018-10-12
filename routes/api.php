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


Route::group(['prefix' => '/v1', 'namespace' => 'Api'], function(){

  /**
   * Authentication
   * */
  Route::post('/login','AuthController@postLogin');
  // Register
  Route::post('/register','AuthController@postRegister');
  // Protected with APIToken Middleware
  Route::middleware('APIToken')->group(function () {
    // Logout
    Route::post('/logout','AuthController@postLogout');
  });

  /**
   * Restful users api
   * */
  Route::get('users', 'UserController@index');
  Route::get('users/{id}', 'UserController@show');
  Route::post('users', 'UserController@store');
  Route::put('users/{id}', 'UserController@update');
  Route::delete('users/{id}', 'UserController@destroy');

  /**
   * Restful phong api
   * */
  Route::get('phongs', 'PhongController@index');
});
