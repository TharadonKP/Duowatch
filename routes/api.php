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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('user/login', 'API\UserController@login');
Route::post('user', 'API\UserController@create');
Route::get('user/{id}', 'API\UserController@view');
Route::put('user/{id}', 'API\UserController@update');
Route::delete('user/{id}', 'API\UserController@delete');
Route::post('user/{id}', 'API\UserController@update');

Route::get('product/indexWithProductType', 'API\ProductController@indexWithProductType');
Route::get('product', 'API\ProductController@index');
Route::get('product/{id}', 'API\ProductController@view');
Route::delete('product/{id}', 'API\ProductController@delete');
Route::get('order', 'API\OrderController@index');
Route::post('order', 'API\OrderController@create');

