<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group([
    'prefix' => 'tasks',
    'middleware' => 'auth:sanctum'
], function () {
    Route::get('/single/{id}', 'TaskController@getTask');
    Route::get('/{filter}', 'TaskController@getListOfTasks');
    Route::get('/{filter}/{arg}', 'TaskController@getListOfTasks');
    Route::post('/', 'TaskController@store');
    Route::put('/{id}', 'TaskController@update');
    Route::delete('/{id}', 'TaskController@destroy');
});

Route::group([
    'prefix' => 'user',
], function () {
    Route::post('signup', 'UserController@signup');
    Route::post('login', 'UserController@login');
    Route::group([
        'middleware' => 'auth:sanctum'
    ], function () {
        Route::get('logout', 'UserController@logout');
        Route::get('me', 'UserController@user');
    });
});
