<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('admin/product', 'Admin\ProductController');

Route::resource('admin/product-type', 'Admin\ProductTypeController');

Route::resource('admin/bonus', 'Admin\BonusController');
Route::resource('admin/status', 'Admin\StatusController');
Route::resource('admin/user-type', 'Admin\UserTypeController');
Route::resource('admin/user-type', 'Admin\UserTypeController');