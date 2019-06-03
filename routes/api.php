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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('users', 'UserController');

Route::get('login/{email}/{password}', 'UserController@login');

Route::post('ticket', 'TicketController@store');

Route::apiResource('cruises', 'CruiseController');

Route::group(['prefix' => 'users'],function(){
    Route::apiResource('{user}/roles','RoleController');
});