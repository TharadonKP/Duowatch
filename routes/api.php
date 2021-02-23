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
/*
Route::get('idols', 'API\IdolController@index');
Route::get('idols/{id}', 'API\IdolController@index');

Route::get('products/{id}', 'API\ProductControllers@view');
Route::get('cartproducts/{id}', 'API\ProductControllers@viewtotalcart');

Route::post('user/login', 'API\UserController@login');
Route::post('user', 'API\UserController@create');
Route::get('user/{id}', 'API\UserController@view');
Route::put('user/{id}', 'API\UserController@update');
Route::post('user/{id}', 'API\UserController@update');//fake update

Route::get('wallet/{id}', 'API\UserController@wallet');
Route::put('wallet/{id}', 'API\UserController@updatewallet');
Route::post('wallet/{id}', 'API\UserController@updatewallet');

Route::post('wallet', 'API\walletController@index');
Route::get('SelectIDWallet', 'API\walletController@SelectIDWallet');
Route::put('wallet/{id}', 'API\walletController@update');

Route::get('topup/{id}', 'API\TopupController@topupselect');
Route::post('topup', 'API\TopupController@index');

Route::get('cart/{id}', 'API\CartController@cartselect');
Route::post('cart', 'API\CartController@index');
Route::delete('cart/{id}', 'API\CartController@cartdelete');
Route::get('cartsum/{id}', 'API\CartController@cartsum');

Route::post('OrderDetail', 'API\OrderDetailsController@index');

Route::post('order', 'API\OrderController@index');
Route::get('SelectIDOrder', 'API\OrderController@SelectIDOrder');
Route::put('order/{id}', 'API\OrderController@update');


Route::get('product', 'API\ProductController@index');
Route::get('order', 'API\OrderController@index');*/